<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class UgscoreTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // $sql='
        // drop procedure if exists ac;
        //         delimiter //
        //         create procedure ac(in u_id int,in q_qid int,in c_time datetime) begin
        //             declare q_score int;
        //             declare u_score int;
        //             declare latest int;
        
        //     select score into q_score from lv where lvid in(select lv_lvid from questions where qid= q_qid);
        
        //     select uscore into latest from uscore where user_id=u_id order by utime desc limit 1;
        //     set u_score = q_score+ifnull(latest,0);
        //     insert into uscore(user_id,uscore,utime) values(u_id,u_score,c_time);
        //     end //
        //     delimiter ;
        //     create trigger ac after insert on ac for each row call ac(new.user_id, new.question_qid ,new.ctime);
        // ';
        // DB::connection($this->connection)->unprepared($sql);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
