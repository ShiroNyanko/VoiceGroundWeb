<h1>入力画面</h1>

<?php

//入力エラーだったらエラーと表示
if(isset($error))
 echo $error;



echo $this->Form->create(false,array(
	'type'=>'post',
	'action'=>'confirm'
	));

//テキストボックス作成
echo $this->Form->text('Input.name');


///  追加  ここから　////////////////////////////////////

//ラジオボタン作成 
echo $this->Form->radio(
		'Input.radio', 
		array(
				'03'  => '東京',
				'06'  => '大阪',
				'042' => '神奈川'
		),
		array(
			'legend' => false,//"表示文字" 
			'value'  => "03",//デフォルトチェック
		)
);

//チェックボックス作成
echo $this->Form->input(
		'Input.checked', 
		array(
			'type'     => 'select',
			'multiple' => 'checkbox',
			'label' => false,
			'value' => "03",//デフォルトチェック
			'options' => array(
				'03'  => '東京',
				'06'  => '大阪',
				'042' => '神奈川'
				)
		)
);

/// 追加　ここまで //////////////////////////////////


//submitボタン＋フォーム終了タグ
echo $this->Form->end('送信');





?>
