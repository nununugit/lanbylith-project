<template>
<div class="container">
    <hr>
        <p>{{msg}}</p>
    <div class="row row-cols-1 row-cols-md-5">
       <div class="card" v-bind:class="'flagcori'+question.qid" style="width: 18rem;" v-for="question in questions" v-bind:key="question.qid" >
                <div class="card-body">
                <h5 class="card-title">{{ question.qid  }}</h5>
              <p class="card-text">{{ question.title }}</p>
              <input value="回答" v-bind:name="question.qid" type="button" class="btn btn-primary" data-toggle="modal" v-bind:data-target="'#exampleModal'+question.qid"  >
                </div>
            </div>
    </div>

    <div class="modal fade" v-bind:id="'exampleModal'+question.qid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  v-for="question in questions" v-bind:key="question.qid">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">{{ question.title}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>{{question.content}}</p>
            </div>
            <form action="/question" method="post">
            <div class="modal-footer">
                    <div class="form-group row">
                        <input class="form-control" type="text" name="answer" >
                    </div>

                    <div class="form-group row">
                        <input class="form-control" type="hidden" name ="qid" v-bind:value="question.qid">
                    </div>

                    <div class = "form-group row">
                        <input class="btn btn-primary " type="submit" value="送信">
                    </div>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
            </div><!-- /.modal-footer -->
        </form>

          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
</div>
</template>

<script>
const axios=require('axios');
export default {
    data :function(){
        return {
            msg:'wait',
            questions:[]
        }
        console.log(questions);
    },
    mounted () {
        axios.get('/api/question')
        .then(response =>{
            console.log(response);
            this.questions = response.data
            this.msg = 'getdata'
        })
        .catch(function (error) {
        console.log(error);
        });
        },
    methods:{
        doAction : function(){
            this.msg = 'hello'
        }
    }
}
</script>
