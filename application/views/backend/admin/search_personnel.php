<script type="text/javascript">
function CheckColors(val){
 var afpsn=document.getElementById('afpsn');
 var rank=document.getElementById('rank');
 var status=document.getElementById('status');
 var category=document.getElementById('category');
 var name=document.getElementById('name');

 if(val=='afpsn'){
   afpsn.style.display='block';
   rank.style.display='none';
   status.style.display='none';
   category.style.display='none';
   name.style.display='none';
}
else if (val=='rank'){
	afpsn.style.display='none';
   rank.style.display='block';
   status.style.display='none';
   category.style.display='none';
   name.style.display='none';
}
else if (val=='status'){
	afpsn.style.display='none';
   rank.style.display='none';
   status.style.display='block';
   category.style.display='none';
   name.style.display='none';
}
else if (val=='category'){
	afpsn.style.display='none';
   rank.style.display='none';
   status.style.display='none';
   category.style.display='block';
   name.style.display='none';
}
else if (val=='name'){
	afpsn.style.display='none';
   rank.style.display='none';
   status.style.display='none';
   category.style.display='none';
   name.style.display='block';
}
 else  {
 	afpsn.style.display='none';
   rank.style.display='none';
   status.style.display='none';
   category.style.display='none';
   name.style.display='none';
   }
}

</script> 
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary" data-collapsed="0">
        	<div class="panel-heading">
            	<div class="panel-title" >
            		<i class="entypo-search"></i>
					<?php echo get_phrase('search_form');?>
            	</div>
            </div>
			<div class="panel-body">
					<?php
					/*echo form_open('admin/search_personnel');
					echo form_label('Select By ID : ');
					$data = array(
					'name' => 'id',
					'placeholder' => 'Please Enter ID'
					);
					echo form_input($data);
					echo "<div class='error_msg'>";
					if (isset($id_error_message)) {
					echo $id_error_message;
					}
					echo "</div>";
					//echo form_submit('submit', 'Show Record');
					echo get_phrase('submit', 'Show Record');
					
					echo form_close();
					*/
					
					?>
					<?php
					echo form_open('admin/search_personnel');
					?>
						
			<div class="form-group">
						<h2><label for="field-2" class="col-sm-1 control-label"><?php echo get_phrase('Filter By:');?></label></h2>
		                    <div class="col-sm-2">
		                    <select  name="color" class="form-control" onchange='CheckColors(this.value);'>
                              
                            		    <option value="">Click here</option>
					    <option value="afpsn">AFPSN</option>
					    <option value="rank">RANK</option>
					    <option value="status">STATUS</option>
					    <option value="category">CATEGORY</option>
					    <option value="name">NAME</option>
		                    		<!--input type="text" class="form-control" name="roll" value="" placeholder="Enter keyword here"-- >
		                    			
		                    </select>
		                    		
		                    		<input type="text" name="afpsn" id="afpsn" style='display:none;'/>

<input type="text" name="rank" id="rank" style='display:none;'/>

<div id="name" style='display:none;'>
Firstname:<input type="text" name="firstname"/>
Lastname:<input type="text" name="lastname"/>
Middlename:<input type="text" name="middlename"/>
</div>
<div id="status" style='display:none;'>
<label class="checkbox-inline"><input type="checkbox" value="active">Active</label>
<label class="checkbox-inline"><input type="checkbox" value="regular">Regular</label>
<label class="checkbox-inline"><input type="checkbox" value="reserve">Reserve</label>
</div>

<div id="category" style='display:none;'>
<label class="checkbox-inline"><input type="checkbox" value="officer">Officer</label>
<label class="checkbox-inline"><input type="checkbox" value="ep">Enlisted Personnel</label>
<label class="checkbox-inline"><input type="checkbox" value="cs">Candidate Soldier</label>
<label class="checkbox-inline"><input type="checkbox" value="civilian">Civilan Personnel</label>
</div>
		                    		
		                    		
		                    
			            		<button type="submit" class="btn btn-info"><?php echo get_phrase('Submit');?></button>
			 </div>		</div>
					<?php
					/*if (isset($result_display)) {
					echo "<p><u>Result</u></p>";
					if ($result_display == 'No record found !') {
					echo $result_display;
					} else {
					echo "<table class='result_table'>";
					echo '<tr><th>Employee ID</th><th>Employee Name</th><th>Joining Date</th><th>Address</th><th>Mobile</th><tr/>';
					foreach ($result_display as $value) {
					echo '<tr>' . '<td class="e_id">' . $value->emp_id . '</td>' . '<td>' . $value->emp_name . '</td>' . '<td class="j_date">' . $value->emp_date_of_join . '</td>' . '<td>' . $value->emp_address . '</td>' . '<td class="mob">' . $value->emp_mobile . '</td>' . '<tr/>';
					}
					echo '</table>';
					}
					}*/
					?>


		<?php
					//if (isset($result_display)) {
					echo "<p><u>Result</u></p>";
					if ($result_display == 'No record found !') {
					echo $result_display;
					} else {
						
					echo "<table class='table table-bordered datatable'>";
					echo '<tr><thead><th>NO.</th>
						<th>AFPSN</th>
						<th>RANK AND NAME</th>
						<th>AFPOS</th>
						<th>UNIT CODE</th>
					<tr/></thead>
					<tr><td>dsd</td>
					<td>dsd</td>
					<td>dsd</td>
					<td>dsd</td>
					<td>dsd</td>
					</tr>';
					echo '</table>';
					}
				//	}
		?>

					
					<?php
					if (isset($show_table)) {
					echo "<div class='emp_table'>";
					if ($show_table == 'Database is empty !') {
					echo $show_table;
					} else {
					echo '<caption>Employee Table</caption>';
					echo "<table width='500px'>";
					echo '<tr><th class="e_id">Employee ID</th><th>Employee Name</th><th>Joining Date</th><tr/>';
					foreach ($show_table as $value) {
					echo "<tr>" . "<td class='e_id'>" . $value->emp_id . "</td>" . "<td>" . $value->emp_name . "</td>" . "<td>" . $value->emp_date_of_join . "</td>" . "<tr/>";
					}
					echo '</table>';
					}
					echo "</div>";
					}
					?>

                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>

<!--script type="text/javascript">

	function get_class_sections(class_id) {

    	$.ajax({
            url: '<?php echo base_url();?>index.php?admin/get_class_section/' + class_id ,
            success: function(response)
            {
                jQuery('#section_selector_holder').html(response);
            }
        });

    }

</script-->

