<template>
    <div class='container'>
    <hr>
    <ul>
        <p>{{questions}}</p>
        <table>
            <th>aaaaaaaaa</th><th>agfawgewa</th>
            <tr v-for="question in questions" v-bind:key="question.qid">  <!-- ←v-forを使ってquestionsを表示 -->
      <td>{{ question.qid }}</td>  <!-- ←questionのIDを表示。@を忘れず！ -->
      <td>{{ question.question_title }}</td>  <!-- ←questionのtitleを表示。@を忘れず！ -->
        </tr>
        </table>
    </ul>
    </div>
</template>

<script>

const axios=require('axios');
export default {
    data1 :function(){
        return {
            question_qid:[]
        }
        console.log(question_qid);
    },
    data2 :function(){
        return {
            ac_count:[]
        }
        console.log(ac_count);

    },
    mounted () {
        axios.get('/api/question')
        .then(response =>{
            console.log(response);
            this.question_qid = response.data1
            this.ac_count = response.data2
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
