new Vue({
    el: '#app',
    data: {
        video: null,
        canvas: null,
        context: null,
        next_url: '',
        completed: false,
        myDataVariable: ''
    },
    computed: {
        hasNext_url() {
            return (this.next_url !== '');
        }
    },
    methods: {
        renderFrame() {

            requestAnimationFrame(this.renderFrame); // 描画を繰り返す

            if (!this.hasNext_url && !this.completed) { // まだQRコードが読み込まれていない場合

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
                        this.next_url = code.data;
                        window.location.href = this.next_url;
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
    },

});