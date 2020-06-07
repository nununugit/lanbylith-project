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

        DB::unprepared('
        drop procedure if exists ac;
        delimiter //
        create procedure ac(in u_id int,in q_qid int,in c_time datetime) begin
            declare g_id int;
            declare q_score int;
            declare u_score int;
            declare g_score int;
            declare latest int;

    select score into q_score from lv where lvid in(select lv_lvid from questions where qid= q_qid);
    select group_gid into g_id from users where id=u_id;

    select uscore into latest from uscore where user_id=u_id order by utime desc limit 1;
    set u_score = q_score+ifnull(latest,0);
    insert into uscore(user_id,uscore,utime) values(u_id,u_score,c_time);

    select gscore into latest from gscore where group_gid=g_id order by gtime desc limit 1;
    set g_score = q_score+ifnull(latest,0);
    insert into gscore(group_gid,gscore,gtime) values(g_id,g_score,c_time);
    end //
    delimiter ;

    create trigger ac after insert on ac for each row call ac(new.user_id, new.question_qid ,new.ctime);
        ');
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
