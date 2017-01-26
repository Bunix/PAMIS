<div>dgdgdfgfdg</div>
<div class="row">
	<div class="col-md-8">
    	<div class="row">
            <!-- CALENDAR-->
            <div class="col-md-12 col-xs-12">    
                <div class="panel panel-primary " data-collapsed="0">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <i class="fa fa-calendar"></i>
                            <?php echo get_phrase('event_schedule');?>
                        </div>
                    </div>
                    <div class="panel-body" style="padding:0px;">
                        <div class="calendar-env">
                            <div class="calendar-body">
                                <div id="notice_calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<div class="col-md-4">
		<div class="row">
            <div class="col-md-12">
            
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" data-start="0" data-end="<?php
                            $this->db2->select('afpsn');
                            $this->db2->from('tr_master');
                            $this->db2->where("dutymodecode",'ACTIVE');
                            $num_results = $this->db2->count_all_results();
                            echo $num_results;?>" 
                    		data-postfix="" data-duration="1500" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('Active personnel');?></h3>
                   <p>Total Active personnels</p>
                </div>
                
            </div>
            <div class="col-md-12">
            
                <div class="tile-stats tile-green">
                    <div class="icon"><i class="entypo-users"></i></div>
                    <div class="num" data-start="0" data-end="<?php 
                            $this->db2->select('afpsn');
                            $this->db2->from('tr_master');
                            $this->db2->where("dutymodecode",'ACTIVE');
                            $this->db2->like( "pergroupname",'PEROFF');
                            $query = $this->db2->count_all_results();
                            //$query = explode(',', $query);
                            echo $query;?>" 
                    		data-postfix="" data-duration="800" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('active_officer');?></h3>
                   <p>Total Active officer</p>
                </div>
                
            </div>
            <div class="col-md-12">
            
                <div class="tile-stats tile-aqua">
                    <div class="icon"><i class="entypo-user"></i></div>
                    <div class="num" data-start="0" data-end="<?php 
                        $this->db2->select('afpsn');
                        $this->db2->from('tr_master');
                        $this->db2->where("dutymodecode =",'ACTIVE');
                        $this->db2->like( "pergroupname",'PERENL');
                        $num_results = $this->db2->count_all_results();
                        echo $num_results; ?>" 
                    		data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo get_phrase('active_enlisted');?></h3>
                   <p>Total Active Enlisted</p>
                </div>
                
            </div>
            <div class="col-md-12">
            
                <div class="tile-stats tile-blue">
                    <div class="icon"><i class="entypo-chart-bar"></i></div>
                    <?php 
							/*$check	=	array(	'date' => date('Y-m-d') , 'status' => '1' );
							$query = $this->db->get_where('attendance' , $check);
							$present_today		=	$query->num_rows();*/
						?>
                    <div class="num" data-start="0" data-end="<?php 
                    		//echo $this->db2->count_all('tr_pft');
                    		//echo $present_today;?>" 
                    		data-postfix="" data-duration="500" data-delay="0">1,223</div>
                    
                    <h3><?php echo get_phrase('civilian_employee');?></h3>
                   <p>Total Civilian Employee</p>
                </div>
                
            </div>
    	</div>
    </div>
	
</div>



    <script>
  $(document).ready(function() {
	  
	  var calendar = $('#notice_calendar');
				
				$('#notice_calendar').fullCalendar({
					header: {
						left: 'title',
						right: 'today prev,next'
					},
					
					//defaultView: 'basicWeek',
					
					editable: false,
					firstDay: 1,
					height: 530,
					droppable: false,
					
					events: [
						<?php 
						$notices	=	$this->db->get('noticeboard')->result_array();
						foreach($notices as $row):
						?>
						{
							title: "<?php echo $row['notice_title'];?>",
							start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),
							end:	new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>) 
						},
						<?php 
						endforeach
						?>
						
					]
				});
	});
  </script>

  
