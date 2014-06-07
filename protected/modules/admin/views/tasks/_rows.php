	<?php echo $form->textFieldControlGroup($model,'id_project',array('class'=>'span8')); ?>

	<?php echo $form->textFieldControlGroup($model,'cost',array('class'=>'span8','maxlength'=>10)); ?>

	<?php echo $form->textAreaControlGroup($model,'comment',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->dropDownListControlGroup($model, 'status', Tasks::getStatusAliases(), array('class'=>'span8', 'displaySize'=>1)); ?>
