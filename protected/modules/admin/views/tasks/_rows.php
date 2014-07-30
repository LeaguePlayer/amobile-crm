	<?php echo $form->dropDownListControlGroup($model,'id_project', $data['projects'] ,array('class'=>'span8')); ?>

    <? if ( !$model->isNewRecord ) { ?>
	   <?php echo $form->textFieldControlGroup($model,'cost',array('class'=>'span8','maxlength'=>10)); ?>
    <? } ?>
    
    <?php echo $form->textFieldControlGroup($model,'name',array('class'=>'span8')); ?>
    
	<?php echo $form->textAreaControlGroup($model,'comment',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->dropDownListControlGroup($model, 'status', Tasks::getStatusAliases(), array('class'=>'span8', 'displaySize'=>1)); ?>
