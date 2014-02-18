<h1>入力画面</h1>
<?php
	echo $data1;
	echo $this->Form->create(false, $options = array('type'=>'post', 'action'=>'confirm'));
	echo $this->Form->text($inputText = 'input.name', $options = array('class'=>'aaaaa'));
	echo $this->Form->submit($caption = '送信', $options = array());
	echo $this->Form->checkbox($fieldName = 'checkbox', $options = array());
	echo $this->Form->end($options = null);
?>