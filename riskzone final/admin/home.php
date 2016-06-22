<?php include("includes/header.php"); ?>
</head>
<body onLoad="load()">
<?php include("includes/topo.php"); ?>
<div class="main">
  <div class="main-inner">
    <div class="container">
     <div class="row">
     
     		
            <div class="span12">

            <?php
            	if(isset($_GET['acao'])){
					$acao = $_GET['acao'];
					if($acao=='bem-vindo'){
						echo '	<div class="alert alert-info">
                      			<button type="button" class="close" data-dismiss="alert">×</button>
                      			<strong>Olá, '.$nomeLogado.'!</strong> Seja Bem vindo ao <strong>RiskZone</strong> !
               					</div>';
        				}
					} 
            ?>
      		</div>
            <div class="span12">	      		
	      		<div id="target-1" class="widget">	      			
	      			<div class="widget-content">	      				
			      		

    <div id="map" style="position: absolute; left: 0px; top: 40px; overflow: hidden; width: 100%; height: 80%; z-index: 0;">
    <!--div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"-->
          <!-- Agrupamento dos marcadores -->
		<script src="js/markerclusterer.js"></script>

  </body>
                        
		      		</div> <!-- /widget-content -->
	      		</div> <!-- /widget -->
      		</div><!-- span 12 -->
            
            
    </div><!-- row -->        
     
        
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Últimos Posts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Título da Postagem </th>
                    <th> Resumo</th>
                    <th class="td-actions"> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> Fresh Web Development Resources </td>
                    <td> http://www.egrappler.com/ </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> Fresh Web Development Resources </td>
                    <td> http://www.egrappler.com/ </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> Fresh Web Development Resources </td>
                    <td> http://www.egrappler.com/ </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> Fresh Web Development Resources </td>
                    <td> http://www.egrappler.com/ </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                  <tr>
                    <td> Fresh Web Development Resources </td>
                    <td> http://www.egrappler.com/ </td>
                    <td class="td-actions"><a href="javascript:;" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a><a href="javascript:;" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
                  </tr>
                
                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 
          
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<?php include("includes/footer.php"); ?>
</body>
</html>
