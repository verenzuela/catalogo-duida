
<div class="container">
	<div class="row">

				<div class="">
					<?php 
					  $products = PostData::getAll();
					?>
					<table class="" border="1" style="border:solid 1px; width:100%; margin-top:20px;margin-bottom:20px;">
					  <thead>
					    <tr style="font-size: 11px; border: solid 1px;">	
					      <th style="text-align: center;">Codigo</th>
					      <th style="width: 200px!important; text-align: center">Foto</th>
					      <th style="text-align: center;">Descripción</th>
					      <th style="text-align: center;">Marca</th>
					      <th style="text-align: center;">Presentacion <small>(unidad o medida)</small></th>
					      <th style="text-align: center;">EAN13 <small>(codbarras uni)</small></th>
					      <th style="text-align: center;">EAN14 <small>(codbarras grupo)</small></th>
					      <th style="text-align: center;">Paquete compra minima</th>
					      <th style="text-align: center;">Dimension paquete</th>
					      <th style="text-align: center;">Paquete x mayor <small>(pallet)</small></th>
					      <th style="text-align: center;">Dimensión pallet</th>
					      <th style="text-align: center;">Peso kg x producto</th>
					      <th style="text-align: center;">Producto grava iva</th>
					      <th style="text-align: center;">Precio sin IVA <small>(precio de lista)</small></th>
					      <th style="text-align: center;">% descuento <small>(para pintulac)</small></th>
					      <th style="text-align: center;">PVP sugerido <small>(sin IVA)</small></th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
					  	foreach ($products as &$product) {
					  	?>
						    <tr>
						      <td><?= $product->code ?></td>
						      <td style="width: 200px!important">
						      	<?php
								  $url = "admin/storage/products/".$product->image;
								?>
						      	<img src="<?= $url; ?>" class="img-responsive " style="width:200px;height:150px;">  
						      </td>
						      <td width="300"><?= $product->description ?></td>
						      <td><?= $product->brand ?></td>
						      <td><?= $product->presentation ?></td>
						      <td><?= $product->ean13 ?></td>
						      <td><?= $product->ean14 ?></td>
						      <td><?= $product->package_least ?></td>
						      <td><?= $product->package_wholesale ?></td>
						      <td><?= $product->dimension_pallet ?></td>
						      <td><?= $product->dimension_package ?></td>
						      <td><?= $product->weight ?></td>
						      <td align="right"><?= round($product->price_grava, 2) ?></td>
						      <td align="right"><?= round($product->price_no_vat, 2) ?></td>
						      <td align="right"><?= round($product->discount_percentage, 2) ?></td>
						      <td align="right"><?= round($product->price_suggested, 2) ?></td>
						    </tr>
					    <?php
					  	}
					  	?>
					  </tbody>
					</table>


		</div>
	</div>
</div>