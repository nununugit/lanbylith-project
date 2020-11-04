<?php

use Illuminate\Database\Seeder;

class question_extra_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //追加問題
       $param = [
        'title'=>'1. 超小型コンピュータ！ ',
        'lv_lvid'=>'4',
        'content'=>'講義の中でも使用した、最低限必要な基幹部分を1枚の回路基盤に搭載した小型のコンピュータをなんと呼ぶか、小文字のアルファベット11文字で答えよ。空白はアンダーバー(_)で表記すること。 ',
        'answer'=> 'CST{raspberry_pi} ',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'2.　なんの略？',
        'lv_lvid'=>'4',
        'content'=>'diffコマンドはなんの英単語の略か、小文字のアルファベットで答えよ。 ',
        'answer'=> 'CST{different}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'3.おさらい！',
        'lv_lvid'=>'4',
        'content'=>'今回の講義で使用したユーザ名を小文字のアルファベットで答えよ。個人に振られている番号は答えなくてよい。',
        'answer'=> 'CST{CST-usr}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'4.なんのために攻撃を？',
        'lv_lvid'=>'4',
        'content'=>'攻撃者がサイバー攻撃をする目的として考えられるものを以下の選択肢から全て選び、記号で答えよ。
                    1. 金銭入手
                    2. 政治的
                    3. 軍事的 
                    4. 目立ちたいから',
        'answer'=> 'CST{1,2,3,4}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'5. 被害に遭ったら！',
        'lv_lvid'=>'4',
        'content'=>'不正なアプリをインストールしてしまった時、どのような対応をすればよいか、以下の選択肢から選び、番号で答えよ。
                    1.そのままにする
                    2.アプリをアンインストールする
                    3.似たようなアプリを探す',
        'answer'=> 'CST{2}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'6. 重大脅威',
        'lv_lvid'=>'4',
        'content'=>'講義中に紹介した10大脅威2020で、1位だった脅威は何か、以下の選択肢から1つ選び、番号で答えよ。 
        　          1. インターネット上のサービスの不正ログイン 
                    2. ネット上の誹謗・中傷・デマ 
                    3. 不正アプリによるスマートフォン利用者への被害 
                    4. メールやSNS等を使った脅迫・詐欺の手口による金銭要求 
                    5. インターネットバンキングの不正利用
                    6. クレジットカード情報の不正利用 
                    7. フィッシングによる個人情報の詐取 
                    8. スマホ決済の不正利用 ',
        'answer'=> 'CST{8}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'7.被害に遭わないために！',
        'lv_lvid'=>'4',
        'content'=>'世の中には不正アプリが存在する。インストールすることによって個人情報を盗まれたり、被害に遭う可能性もある。このような被害に遭わないためには、アプリをインストールする際にどのようなことに気をつければよいか。以下の選択肢から全て選び、番号で答えよ。 
                    1.レビューの数を確認し、評価が全て5のものを信頼する。  
                    2.アプリ名や開発元の会社を調べ、怪しさがないか確認する。  
                    3.公式マーケット以外の、身近な会社が出しているアプリをインストールする。 
                    4.不要なアプリはインストールしない。 ',
        'answer'=> 'CST{2,4}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'8.ありがちな言葉',
        'lv_lvid'=>'4',
        'content'=>'以下の文章の空欄に当てはまる言葉を漢字2文字で答えよ。
        「パスワードの割り出しや暗号の解読に用いられる攻撃で、辞書にある単語を片端から試すことを繰り返す手法のことを「　　攻撃」と呼ぶ。」 ',
        'answer'=> 'CST{辞書}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'9.金目当て！',
        'lv_lvid'=>'4',
        'content'=>'身代金を要求する悪意のあるソフトウェアのことを何というか。カタカナ7文字で答えよ。',
        'answer'=>'CST{ランサムウェア}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'10.○○○アップ！',
        'lv_lvid'=>'4',
        'content'=>'lsコマンドは、元となったある英語を省略したものとなっている。元となった英単語を小文字のアルファベットで答えよ。',
        'answer'=>'CST{list}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'11.どっちが先？ ',
        'lv_lvid'=>'4',
        'content'=>'diffコマンドのように、2つ以上のファイルを使用するとき、比較元と比較先のファイルどちらを先に表記するか、以下の選択肢から1つ選び、番号で答えよ。 
                    1.比較先ファイル→比較元ファイル             
                    2.比較元ファイル→比較先ファイル ',
        'answer'=>'CST{2}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'12.たくさんのOSの中から！ ',
        'lv_lvid'=>'4',
        'content'=>'講義ではUNIX系OSを紹介し、実際に触れて動かしてみた。では、UNIX系OSの中のなんというOSを使用したか、カタカナ5文字で答えよ。 ',
        'answer'=>'CST{ラズビアン}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'13.情報セキュリティへの理解を深めて！',
        'lv_lvid'=>'4',
        'content'=>'IT国家戦略を技術面、人材面から支えるために設立された、経済産業省所管の独立行政法人情報処理推進機構の略称を大文字のアルファベット3文字で答えよ。',
        'answer'=>'CST{IPA}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'14.ターゲットを「釣る」？ ',
        'lv_lvid'=>'4',
        'content'=>'以下の文章の空欄に当てはまる言葉をカタカナで答えよ。2つの空白には、同じ言葉が入る。 
                    「身近な企業を名乗った攻撃者が、不正なサイトにアクセスさせるように誘導し、個人情報などを盗む攻撃のことを「　　　　　　詐欺」という。また、そのような不正なサイトのことを同じ言葉を用いて「　　　　　サイト」と呼ぶ。」',
        'answer'=> 'CST{フィッシング}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'15.チクチク言葉はダメ！',
        'lv_lvid'=>'4',
        'content'=>'誹謗・中傷にあたる攻撃のうち、社会的評価を下げる内容を書き込んだ場合に問われる可能性のある罪を、以下の選択肢より1つ以上選び、記号で答えよ。
                    1. 名誉毀損罪 
                    2. 侮辱罪 
                    3. 脅迫罪 
                    4. 暴行罪 
      　            5. 業務妨害罪 ',
        'answer'=>'CST{1,2}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'16.ファイルの削除 ',
        'lv_lvid'=>'4',
        'content'=>'ファイルの削除をするコマンドを次の中から選んで番号で答えよう。
                    1.rm 
                    2.del
                    3.pop 
                    4.clear ',
        'answer'=>'CST{1}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'17.歴史をさかのぼる！ ',
        'lv_lvid'=>'4',
        'content'=>'あなたが今までRaspi上で入力したコマンドはすべてコマンド履歴として保存されている。コマンド履歴を見るのに使用するコマンドを次の中から選んで番号で答えよう。
                    1.reboot 
                    2.TL 
                    3.pr 
                    4.history',
        'answer'=>'CST{4}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'18.よろしくお願いしまぁぁぁす！！！！',
        'lv_lvid'=>'4',
        'content'=>'巨大素数2つの素因数分解が困難であることを利用した公開鍵暗号は○○暗号と呼ばれている。○○に当てはまる言葉を次の選択肢から選んで番号で答えよう。
                    1.Diffie-Hellman 
                    2.RSA 
                    3.Miller-Rabin
                    4.AES ',
        'answer'=>'CST{2}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'19.人気のある言語 ',
        'lv_lvid'=>'4',
        'content'=>'今回サーボモータを動かすのにも使用した、近年人気を博しているプログラミング言語は何か。英語小文字6字で答えよう。',
        'answer'=>'CST{python}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'20.詳細を表示！',
        'lv_lvid'=>'4',
        'content'=>'「ls -l」コマンドを実行してみよう。このコマンドはファイルの詳細を表示するコマンドである。このコマンドでは「ファイルの種類」「ハードリンク数」「所有者」「グループ」「○○」「タイムスタンプ」「ファイル名」が表示できる。○○に当てはまる言葉を選択肢から選んで番号で答えよ。
                    1.タグ 
                    2.ファイルサイズ 
                    3.属性
                    4.アクセス数',
        'answer'=>'CST{2}',
    ];

    DB::table('questions')->insert($param);

    $param = [
        'title'=>'23-223',
        'lv_lvid'=>'4',
        'content'=>'「/question/23-223/」の中にある「ASCII_program」を実行し、返される暗号を復号しよう。',
        'answer'=>'CST{ONLYTHEASCIICODEWINS}',
    ];

    DB::table('questions')->insert($param);


    $param = [
        'title'=>'Broken_SOI',
        'lv_lvid'=>'4',
        'content'=>'WindowsのデスクトップにあるJPEG_FILE.jpgを見てみよう。そのファイルはJPEG画像のはずだが、SOIマーカーがXXに置き換わっているため読み取れない。SOIマーカーを適切に入力し、フラグを読み取ろう。',
        'answer'=>'CST{J0int_Ph0t0gr4phic_Expert5_6r0up}',
    ];

    DB::table('questions')->insert($param);   
    }
}
