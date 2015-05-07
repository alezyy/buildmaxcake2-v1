<?php
  $this->Js->get('#CityCountryId')->event('change', 
    $this->Js->request(array(
        'controller'=>'states',
        'action'=>'getByState'
        ), array(
        'update'=>'#CityStateId',
        'async' => true,
        'method' => 'post',
        'dataExpression'=>true,
        'data'=> $this->Js->serializeForm(array(
            'isForm' => true,
            'inline' => true
            ))
        ))
    );

?>

<div class="cities form">
<?php echo $this->Form->create('City'); ?>

      



	<fieldset>
		<legend><?php echo __('Add City'); ?></legend>
	<?php
		echo $this->Form->input('country_id',  
                                           array('label'=>__('Countries List'),
                                                'empty'=>__('Select Countries')
                                              //   'options'=>$countries, 'selected'=>false
						
	                                 	    
                                                 )
                                                                                            ) ;
                                               
		echo $this->Form->input('state_id', array('label'=>__('States List'),
                                                            'empty'=>__('Select States')
                                                //  'options'=>$states, 'selected'=>false
							
                                                                           )
                                                                            );

		echo $this->Form->input('city', array('placeholder'=> __('City')));
	?>

	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cities'), array('action' => 'index')); ?></li>
	</ul>
</div>



 