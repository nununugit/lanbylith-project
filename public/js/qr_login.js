new Vue({
    el: '#app',
    data: {
        video: null,
        canvas: null,
        context: null,
        uuid: '',
        completed: false
    },
    computed: {
        hasUuid() {
            return (this.uuid !== '');
        }
    },
    methods: {
        renderFrame() {

            requestAnimationFrame(this.renderFrame); // 描画を繰り返す

            if (!this.hasUuid && !this.completed) { // まだQRコードが読み込まれていない場合

                const video = this.video;
                const canvas = this.canvas;
                const context = this.context;

                if (video.readyState === video.HAVE_ENOUGH_DATA) {

                    canvas.height = video.videoHeight;
                    canvas.width = video.videoWidth;
                    context.drawImage(video, 0, 0, canvas.width, canvas.height);
                    const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
                    const code = jsQR(imageData.data, imageData.width, imageData.height);

                    if (code) {

                        this.uuid = code.data;
                        axios.post('/auth/qr_login', { uuid: this.uuid })
                            .then((response) => {

                                const result = response.data.result;
                                const user = response.data.user;

                                if (result) {
                                    console.log(user);
                                    this.completed = true;
                                    alert('「' + user.name + '」さん、おはようございます！');
                                    location.href = '/home'; // ここでリダイレクト
                                } else {
                                    console.log('ログイン失敗..');
                                }

                            })
                            .catch((error) => {})
                            .then(() => {
                                this.uuid = '';
                            });
                    }
                }
            }
        }
    },
    mounted() {
        this.video = document.createElement('video');
        this.canvas = document.getElementById('canvas');
        this.context = this.canvas.getContext('2d');

        navigator.mediaDevices.getUserMedia({ video: true })
            .then((stream) => {
                this.video.srcObject = stream;
                this.video.play();
                requestAnimationFrame(this.renderFrame);
            });
    }
});