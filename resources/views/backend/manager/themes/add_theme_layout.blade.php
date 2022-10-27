@extends('layouts.master')
@section('title', 'Book a event')

@section('styles')
<style type="text/css">
    /* html {
      box-sizing: border-box;
      height: 100%;
    }

    *,*::before,*::after {
      box-sizing: inherit;
      margin: 0;
      padding: 0;
    } */

    a, a:visited, a:hover, a:active {
      color: inherit;
    }

    .canvas-box {
      margin: 2%;
      display: flex;
      flex-direction: row;
      flex-wrap: nowrap;
      justify-content: center;
      align-items: center;
      gap: 10px 10px; /* row-gap column gap */
    }
    
    .toolbox {
      display: flex;
      flex-direction: column;
      line-height: 0;
      height: 500px;
      overflow-y: scroll;
      background: white;
    }
    .thumbnails li {
      flex: auto;
      list-style: none;
    }
    .thumbnails a {
      display: block;
    }
    .thumbnails img {
      width: 25vmin;
      height: 25vmin;
      object-fit: cover;
      object-position: top;
    }
</style>
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
          <div class="col-12">
              <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0 font-size-18">Add Event Layout</h4>                      
              </div>
          </div>
      </div>

      <div class="row">
        <div class="col-lg-12" style="text-align:center;">
          <p><mark>Build layout and type other details</mark></p>
        </div>
      </div>

      <div class="canvas-box">
        <div>
          <label for="validationTooltip01" class="form-label">Category</label>
          <select name="category" class="form-select" id="item-category">
              <option value="Table">Table</option>
              <option value="Chair" selected>Chair</option>
              <option value="Weeding Couple Chair">Weeding Couple Chair</option>
              <option value="Flower">Flower</option>
              <option value="Hanging">Hanging</option>
              <option value="Multimedia">Multimedia</option>
              <option value="Banner">Banner</option>
              <option value="Stage">Stage</option>
          </select>
          <div class="toolbox" style="margin-top:5px;">
            <ul class="thumbnails" id="images-list">
              
            </ul>
          </div>
        </div>
        <div>
          <canvas id="canvas" width="700" height="500"></canvas>
        </div>
        <div style="width:200px;">
          <button type="button" class="btn btn-info waves-effect waves-light" style="margin-bottom:20px;" onClick="addTextToCanvas()">Add Text</button><br/>
          <button type="button" class="btn btn-light waves-effect" onCLick="sendBack()"><i class='bx bx-chevrons-left'></i>Back</button>
          <button type="button" class="btn btn-light waves-effect" onCLick="sendBackward()"><i class="bx bx-chevron-left"></i>Backward</button>
          <button type="button" class="btn btn-light waves-effect" onCLick="bringForward()"><i class="bx bx-chevron-right"></i>Forward</button>
          <button type="button" class="btn btn-light waves-effect" onCLick="bringFront()"><i class="bx bx-chevrons-right"></i>Front</button>
          <button type="button" id="delete-object-btn" class="btn btn-primary" style="margin-top:20px;">
            Delete Object
          </button>
          <button type="button" class="btn btn-primary" style="margin-top:10px;">
            <a id="downloadLink" download="theme_export.jpg">Download as image</a>
          </button>
          <button type="button" class="btn btn-success waves-effect waves-light" style="margin-top:30px;" onCLick="save()">Build</button>
        </div>
      </div>


      <div class="row" style="margin:3% 15%;">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" action="{{ route('theme.store.layout') }}" method="post" novalidate="">
                    @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label for="validationTooltip01" class="form-label">Layout Name</label>
                                    <input type="text" class="form-control" id="validationTooltip01" placeholder="Enter layout name" name="name" value="{{ old('name') }}" required="">
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                    <div class="invalid-tooltip">
                                        Please enter layout name.
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3 position-relative">
                                    <label for="validationTooltip03" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="validationTooltip03" placeholder="Enter layout price" name="price" value="{{ old('price') }}" required="">
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                    <div class="invalid-tooltip">
                                        Please enter layout price.
                                    </div>
                                </div>
                            </div>

                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 position-relative">
                                    <label for="validationTooltip100" class="form-label">Service Type</label>
                                    <select class="form-control select2" style="width: 100% !important;" id="validationTooltip100" name="type_id" required="">
                                        <!-- <option value="">Select Service Type</option>
                                        <optgroup label="Choose any service type from below:"> -->
                                            @foreach($types as $single_type)
                                                <option value="{{ $single_type->id }}" {{ old('type_id') == $single_type->id ? "selected" : "" }}>{{ $single_type->type }}</option>
                                            @endforeach
                                        <!-- </optgroup> -->
                                    </select>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                    <div class="invalid-tooltip">
                                        Please select service type.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 position-relative">
                                    <label class="form-label">Layout Image</label></br>
                                    <img src="" style="width: 30vw; min-width: 330px;" id="layout-image"></br>
                                    <input type="hidden" name="layoutImage" value="" id="layout-image-input"></br>
                                    <textarea id="textarea" name="layout" required="" class="form-control" rows="5" placeholder="Build the layout at top of the page. This field will be automatically filled." hidden></textarea>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                    <div class="invalid-tooltip">
                                        Please build the layout.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary" style="margin-top: 6px !important; width: 100% !important" type="submit">Save Theme Layout</button>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

  </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/521/fabric.js"></script>

<script type="text/javascript">
  let canvas = new fabric.Canvas('canvas', { preserveObjectStacking: true });
  let delBtn = document.getElementById('delete-object-btn');
  let elementJsonLayout = document.getElementById('textarea');
  let layoutImage = document.getElementById('layout-image');
  let layoutImageInput = document.getElementById('layout-image-input');
  let ulImagesList = document.getElementById('images-list');
  let host = window.location.origin;

  canvas.backgroundColor = '#565656';
  downloadLink.addEventListener('click', download, false);
  delBtn.style.display = 'none';            // Hide the delete button until needed


  // populate theme items on window load
  $(window).on('load', function(){
    let categoryValue = $("#item-category").val();
    populateThemeItems(categoryValue);
  });

  $("#item-category").change(function (){
    let categoryValue = $("#item-category").val();
    populateThemeItems(categoryValue);
  });

  function populateThemeItems(categoryValue){
    $(ulImagesList).empty();

    $.ajax({
        type: "POST",
        url: "{{ route('theme.items.array') }}",
        data: { category: categoryValue }
    }).done(function(result){
        let data = JSON.parse(result);            
        data.forEach((element) => {
            let html = `<li><a href="#"><img src="${host}${element.source}" onClick="addImgToCanvas(this)"/></a></li>`;
            $(ulImagesList).append(html);
        });
    });
  }


  // save json
  function save() {
    var json = JSON.stringify(canvas);
    elementJsonLayout.value = json;
    layoutImage.src = canvas.toDataURL('image/png');
    layoutImageInput.value = canvas.toDataURL('image/png');
    alert("Saved!");
  }



  // add image
  function addImgToCanvas(imgElement){
    let imgInstance = new fabric.Image(imgElement, {
      left: 100,
      top: 100,
      angle: 0,
    },{ crossOrigin: 'Anonymous' });
    imgInstance.scaleToWidth(300, false);
    canvas.add(imgInstance);
  }



  // add text
  function addTextToCanvas(){
    let text = new fabric.IText('Type here', {
      fontFamily : 'sans-serif',
      fill: "white",
    });
    console.log(text.willDrawShadow())
    canvas.add(text);
    canvas.centerObject(text);
  }


  // move object through stack order
  function sendBack(){
    canvas.sendToBack(canvas.getActiveObject());
    canvas.renderAll();
  }
  function sendBackward(){
    canvas.sendBackwards(canvas.getActiveObject());
    canvas.renderAll();
  }
  function bringForward(){
    canvas.bringForward(canvas.getActiveObject());
    canvas.renderAll();
  }
  function bringFront(){
    canvas.bringToFront(canvas.getActiveObject());
    canvas.renderAll();
  }


  // delete selected object
  canvas.on({                                         // When a selection is being made
    'selection:created': () => {
      delBtn.style.display = 'flex'
    }
  })
  canvas.on({                                         // When a selection is cleared
    'selection:cleared': () => {
      delBtn.style.display = 'none'
    }
  })

  // remove the active object on clicking the delete button
  delBtn.addEventListener('click', e => {
    canvas.remove(canvas.getActiveObject())
  })

  // remove on delete key press
  $('html').keyup(function(e){
    if(e.keyCode == 46) {
        deleteSelectedObjectsFromCanvas();
    }
  });    
  function deleteSelectedObjectsFromCanvas(){
    var selection = canvas.getActiveObject();
    if (selection.type === 'activeSelection') {
        selection.forEachObject(function(element) {
            console.log(element);
            canvas.remove(element);
        });
    }
    else{
        canvas.remove(selection);
    }
    canvas.discardActiveObject();
    canvas.requestRenderAll();
  }


  // download canvas as an image
  function download() {
    var dt = canvas.toDataURL('image/jpeg');
    this.href = dt;
  };
</script>
@endsection