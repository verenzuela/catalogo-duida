<!-- Main Content -->
<div class="row">
  <div class="col-md-12">
    <!-- Button trigger modal -->
    <h2>NUEVO PRODUCTO</h2>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="fa fa-star"></i> Nuevo Producto
      </div>
      
      <div class="panel-body ">
        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="index.php?action=addproduct">
          
          <div class="form-group">
            <label for="code" class="col-lg-1 control-label">Codigo</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="code" placeholder="Codigo">
            </div>

            <label for="name" class="col-lg-1 control-label">Nombre</label>
            <div class="col-lg-4">
              <input type="text" class="form-control" name="name" placeholder="Nombre del producto">
            </div>

            <label for="brand" class="col-lg-1 control-label">Marca</label>
            <div class="col-lg-3">
              <input type="text" class="form-control" name="brand" placeholder="Marca">
            </div>
          </div>

          <div class="form-group">
            <label for="description" class="col-lg-2 control-label">Descripcion</label>
            <div class="col-lg-10">
            <textarea class="form-control" id="inputPassword1" placeholder="Descripcion" rows="4" name="description"></textarea>
            </div>

          </div>

          <div class="form-group">
            <label for="presentation" class="col-lg-2 control-label">Presentacion</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="presentation" placeholder="(unidad o medida)">
            </div>

            <label for="ean13" class="col-lg-2 control-label">EAN13</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="ean13" placeholder="codbarras unid">
            </div>

            <label for="ean14" class="col-lg-2 control-label">EAN14</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="ean14" placeholder="codbarras grupo">
            </div>
          </div>

          <div class="form-group">
            <label for="package_least" class="col-lg-2 control-label">Paquete x Minima</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="package_least" placeholder="compra mínima">
            </div>

            <label for="dimension_package" class="col-lg-2 control-label">Dimension Paquete</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="dimension_package" placeholder="dimensión del paquete">
            </div>

            <label for="package_wholesale" class="col-lg-2 control-label">Paquete x Mayor</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="package_wholesale" placeholder="compra al mayor">
            </div>
          </div>

          <div class="form-group">
            <label for="dimension_pallet" class="col-lg-2 control-label">Dimension Pallet</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="dimension_pallet" placeholder="dimension pallet">
            </div>

            <label for="weight" class="col-lg-2 control-label">Peso Kg x producto</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="weight" placeholder="peso kg por producto">
            </div>

            <label for="price_grava" class="col-lg-2 control-label">Producto grava IVA</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="price_grava" placeholder="producto grava IVA">
            </div>
          </div>

          <div class="form-group">
            <label for="price_no_vat" class="col-lg-2 control-label">Precio sin IVA</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="price_no_vat" placeholder="Presio sin IVA">
            </div>

            <label for="discount_percentage" class="col-lg-2 control-label">% de descuento</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="discount_percentage" placeholder="% de descuento">
            </div>

            <label for="price_suggested" class="col-lg-2 control-label">PVP Sugerido</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="price_suggested" placeholder="PVP Sugerido">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Imagen</label>
            <div class="col-lg-10">
              <input type="file" name="image">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-2">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="is_public"> Es Visible
                </label>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="is_featured">  Destacado
                </label>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Categoria</label>
            <div class="col-lg-10">
              <?php
              $categories = CategoryData::getAll();
              if(count($categories)>0):?>
                <select name="category_id" class="form-control" required>
                  <option value="">-- SELECCIONE CATEGORIA --</option>
                  <?php foreach($categories as $cat):?>
                    <option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>
                  <?php endforeach; ?>
                </select>
              <?php endif; ?>
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-offset-2 col-lg-6">
              <button type="submit" class="btn btn-primary btn-block">Agregar Publicacion</button>
            </div>
            <div class="col-lg-4">
              <button type="reset" class="btn btn-default btn-block">Limpiar Campos</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
<br><br>