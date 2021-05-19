 (function ($) {
 
  $(document).ready(function () {

   $('.field--name-field-department-contact-data').attr('id', 'department_contact_data');
   $('.field--name-field-researches-publications').attr('id', 'department_researches_publications');
   $('.field--name-field-dep-undergraduates').attr('id', 'department_undergraduates');
   $('.field--name-field-dep-postgraduates').attr('id', 'department_postgraduates');
   $('.department-block .views-field-field-department-image .field-content').attr('id', 'department_image');
   $("<div class='overlay'>  </div>" ).insertBefore( ".department-block .views-field-field-department-image .field-content" );
   $("<div class='overlay'>  </div>" ).insertBefore( ".home-news-block .views-field-field-news-image .field-content" );
   $('.dropdown').click( function() {
    $('.dropdown-content').slideToggle(200);
   });
   let surgicalNursingClick = document.getElementById('surgical-nursing-click');
   let childrenNursingClick = document.getElementById('children-nursing-click');
   let maternityNursingClick = document.getElementById('maternity-nursing-click');
   let familyNursingClick = document.getElementById('family-nursing-click');
   let administrationNursingClick = document.getElementById('administration-nursing-click');
   let psychiatricNursingClick = document.getElementById('psychiatric-nursing-click');
 
   let surgicalNursing = document.getElementById('surgical-nursing');
   let childrenNursing = document.getElementById('children-nursing');
   let maternityNursing = document.getElementById('maternity-nursing');
   let familyNursing = document.getElementById('family-nursing');
   let administrationNursing = document.getElementById('administration-nursing');
   let psychiatricNursing = document.getElementById('psychiatric-nursing');
 
   let surgicalNursingClickColor = document.querySelector('#surgical-nursing-click p');
   let childrenNursingClickColor = document.querySelector('#children-nursing-click p');
   let maternityNursingClickColor = document.querySelector('#maternity-nursing-click p');
   let familyNursingClickColor = document.querySelector('#family-nursing-click p');
   let administrationNursingClickColor = document.querySelector('#administration-nursing-click p');
   let psychiatricNursingClickColor = document.querySelector('#psychiatric-nursing-click p');

   
   var page_url=  window.location.href;
   if (page_url.includes('department/projects')) {
     $('#department_projects_link').attr('class', 'menu-item--active-trail');
   }else if(page_url.includes('department/graduates')){
	 $('#department_graduates_link').attr('class', 'menu-item--active-trail');
   }else if(page_url.includes('department/postgraduates')){
	 $('#department_postgraduates_link').attr('class', 'menu-item--active-trail');
   }else if(page_url.includes('department/undergraduates')){
	 $('#department_undergraduate_link').attr('class', 'menu-item--active-trail');
   }else if(page_url.includes('department/research')){
	 $('#department_resharch_link').attr('class', 'menu-item--active-trail');
   }else if(page_url.includes('department/staff')){
	 $('#department_staff_link').attr('class', 'menu-item--active-trail');
   }else if(page_url.includes('department/about')){
	 $('#department_about_link').attr('class', 'menu-item--active-trail');
   }else{
	 $('#department_about_link').attr('class', 'menu-item--active-trail');
   }
 
   surgicalNursingClick.addEventListener('click', function(){
       surgicalNursing.classList.remove('d-none');
       childrenNursing.classList.add('d-none');
       maternityNursing.classList.add('d-none');
       familyNursing.classList.add('d-none');
       administrationNursing.classList.add('d-none');
       psychiatricNursing.classList.add('d-none');
 
       surgicalNursingClickColor.classList.add('active-color');
       childrenNursingClickColor.classList.remove('active-color');
       maternityNursingClickColor.classList.remove('active-color');
       familyNursingClickColor.classList.remove('active-color');
       administrationNursingClickColor.classList.remove('active-color');
       psychiatricNursingClickColor.classList.remove('active-color');
   });
   childrenNursingClick.addEventListener('click', function(){
       surgicalNursing.classList.add('d-none');
       childrenNursing.classList.remove('d-none');
       maternityNursing.classList.add('d-none');
       familyNursing.classList.add('d-none');
       administrationNursing.classList.add('d-none');
       psychiatricNursing.classList.add('d-none');
 
       surgicalNursingClickColor.classList.remove('active-color');
       childrenNursingClickColor.classList.add('active-color');
       maternityNursingClickColor.classList.remove('active-color');
       familyNursingClickColor.classList.remove('active-color');
       administrationNursingClickColor.classList.remove('active-color');
       psychiatricNursingClickColor.classList.remove('active-color');
   });
   maternityNursingClick.addEventListener('click', function(){
       surgicalNursing.classList.add('d-none');
       childrenNursing.classList.add('d-none');
       maternityNursing.classList.remove('d-none');
       familyNursing.classList.add('d-none');
       administrationNursing.classList.add('d-none');
       psychiatricNursing.classList.add('d-none');
 
       surgicalNursingClickColor.classList.remove('active-color');
       childrenNursingClickColor.classList.remove('active-color');
       maternityNursingClickColor.classList.add('active-color');
       familyNursingClickColor.classList.remove('active-color');
       administrationNursingClickColor.classList.remove('active-color');
       psychiatricNursingClickColor.classList.remove('active-color');
   });
   familyNursingClick.addEventListener('click', function(){
       surgicalNursing.classList.add('d-none');
       childrenNursing.classList.add('d-none');
       maternityNursing.classList.add('d-none');
       familyNursing.classList.remove('d-none');
       administrationNursing.classList.add('d-none');
       psychiatricNursing.classList.add('d-none');
 
       surgicalNursingClickColor.classList.remove('active-color');
       childrenNursingClickColor.classList.remove('active-color');
       maternityNursingClickColor.classList.remove('active-color');
       familyNursingClickColor.classList.add('active-color');
       administrationNursingClickColor.classList.remove('active-color');
       psychiatricNursingClickColor.classList.remove('active-color');
   });
   administrationNursingClick.addEventListener('click', function(){
       surgicalNursing.classList.add('d-none');
       childrenNursing.classList.add('d-none');
       maternityNursing.classList.add('d-none');
       familyNursing.classList.add('d-none');
       administrationNursing.classList.remove('d-none');
       psychiatricNursing.classList.add('d-none');
 
       surgicalNursingClickColor.classList.remove('active-color');
       childrenNursingClickColor.classList.remove('active-color');
       maternityNursingClickColor.classList.remove('active-color');
       familyNursingClickColor.classList.remove('active-color');
       administrationNursingClickColor.classList.add('active-color');
       psychiatricNursingClickColor.classList.remove('active-color');
   });
   psychiatricNursingClick.addEventListener('click', function(){
       surgicalNursing.classList.add('d-none');
       childrenNursing.classList.add('d-none');
       maternityNursing.classList.add('d-none');
       familyNursing.classList.add('d-none');
       administrationNursing.classList.add('d-none');
       psychiatricNursing.classList.remove('d-none');
 
       surgicalNursingClickColor.classList.remove('active-color');
       childrenNursingClickColor.classList.remove('active-color');
       maternityNursingClickColor.classList.remove('active-color');
       familyNursingClickColor.classList.remove('active-color');
       administrationNursingClickColor.classList.remove('active-color');
       psychiatricNursingClickColor.classList.add('active-color');
   });

   let surgicalNursingClickb = document.getElementById('surgical-nursing-clickb');
   let childrenNursingClickb = document.getElementById('children-nursing-clickb');
   let maternityNursingClickb = document.getElementById('maternity-nursing-clickb');
   let familyNursingClickb = document.getElementById('family-nursing-clickb');
   let administrationNursingClickb = document.getElementById('administration-nursing-clickb');
   let psychiatricNursingClickb = document.getElementById('psychiatric-nursing-clickb');
   
   let surgicalNursingb = document.getElementById('surgical-nursingb');
   let childrenNursingb = document.getElementById('children-nursingb');
   let maternityNursingb = document.getElementById('maternity-nursingb');
   let familyNursingb = document.getElementById('family-nursingb');
   let administrationNursingb = document.getElementById('administration-nursingb');
   let psychiatricNursingb = document.getElementById('psychiatric-nursingb');
   
   let surgicalNursingClickColorb = document.querySelector('#surgical-nursing-clickb p');
   let childrenNursingClickColorb = document.querySelector('#children-nursing-clickb p');
   let maternityNursingClickColorb = document.querySelector('#maternity-nursing-clickb p');
   let familyNursingClickColorb = document.querySelector('#family-nursing-clickb p');
   let administrationNursingClickColorb = document.querySelector('#administration-nursing-clickb p');
   let psychiatricNursingClickColorb = document.querySelector('#psychiatric-nursing-clickb p');
   
   
   surgicalNursingClickb.addEventListener('click', function(){
       surgicalNursingb.classList.remove('d-none');
       childrenNursingb.classList.add('d-none');
       maternityNursingb.classList.add('d-none');
       familyNursingb.classList.add('d-none');
       administrationNursingb.classList.add('d-none');
       psychiatricNursingb.classList.add('d-none');
   
       surgicalNursingClickColorb.classList.add('active-color');
       childrenNursingClickColorb.classList.remove('active-color');
       maternityNursingClickColorb.classList.remove('active-color');
       familyNursingClickColorb.classList.remove('active-color');
       administrationNursingClickColorb.classList.remove('active-color');
       psychiatricNursingClickColorb.classList.remove('active-color');
   });
   childrenNursingClickb.addEventListener('click', function(){
       surgicalNursingb.classList.add('d-none');
       childrenNursingb.classList.remove('d-none');
       maternityNursingb.classList.add('d-none');
       familyNursingb.classList.add('d-none');
       administrationNursingb.classList.add('d-none');
       psychiatricNursingb.classList.add('d-none');
   
       surgicalNursingClickColorb.classList.remove('active-color');
       childrenNursingClickColorb.classList.add('active-color');
       maternityNursingClickColorb.classList.remove('active-color');
       familyNursingClickColorb.classList.remove('active-color');
       administrationNursingClickColorb.classList.remove('active-color');
       psychiatricNursingClickColorb.classList.remove('active-color');
   });
   maternityNursingClickb.addEventListener('click', function(){
       surgicalNursingb.classList.add('d-none');
       childrenNursingb.classList.add('d-none');
       maternityNursingb.classList.remove('d-none');
       familyNursingb.classList.add('d-none');
       administrationNursingb.classList.add('d-none');
       psychiatricNursingb.classList.add('d-none');
   
       surgicalNursingClickColorb.classList.remove('active-color');
       childrenNursingClickColorb.classList.remove('active-color');
       maternityNursingClickColorb.classList.add('active-color');
       familyNursingClickColorb.classList.remove('active-color');
       administrationNursingClickColorb.classList.remove('active-color');
       psychiatricNursingClickColorb.classList.remove('active-color');
   });
   familyNursingClickb.addEventListener('click', function(){
       surgicalNursingb.classList.add('d-none');
       childrenNursingb.classList.add('d-none');
       maternityNursingb.classList.add('d-none');
       familyNursingb.classList.remove('d-none');
       administrationNursingb.classList.add('d-none');
       psychiatricNursingb.classList.add('d-none');
   
       surgicalNursingClickColorb.classList.remove('active-color');
       childrenNursingClickColorb.classList.remove('active-color');
       maternityNursingClickColorb.classList.remove('active-color');
       familyNursingClickColorb.classList.add('active-color');
       administrationNursingClickColorb.classList.remove('active-color');
       psychiatricNursingClickColorb.classList.remove('active-color');
   });
   administrationNursingClickb.addEventListener('click', function(){
       surgicalNursingb.classList.add('d-none');
       childrenNursingb.classList.add('d-none');
       maternityNursingb.classList.add('d-none');
       familyNursingb.classList.add('d-none');
       administrationNursingb.classList.remove('d-none');
       psychiatricNursingb.classList.add('d-none');
   
       surgicalNursingClickColorb.classList.remove('active-color');
       childrenNursingClickColorb.classList.remove('active-color');
       maternityNursingClickColorb.classList.remove('active-color');
       familyNursingClickColorb.classList.remove('active-color');
       administrationNursingClickColorb.classList.add('active-color');
       psychiatricNursingClickColorb.classList.remove('active-color');
   });
   psychiatricNursingClickb.addEventListener('click', function(){
       surgicalNursingb.classList.add('d-none');
       childrenNursingb.classList.add('d-none');
       maternityNursingb.classList.add('d-none');
       familyNursingb.classList.add('d-none');
       administrationNursingb.classList.add('d-none');
       psychiatricNursingb.classList.remove('d-none');
   
       surgicalNursingClickColorb.classList.remove('active-color');
       childrenNursingClickColorb.classList.remove('active-color');
       maternityNursingClickColorb.classList.remove('active-color');
       familyNursingClickColorb.classList.remove('active-color');
       administrationNursingClickColorb.classList.remove('active-color');
       psychiatricNursingClickColorb.classList.add('active-color');
   });

  
   $('.js-form-type-search').attr('id', 'js-form-type-search');
   var html_code = '<i class="fa fa-search"></i>';
   document.getElementById("js-form-type-search").innerHTML +=  html_code;
   
//   $('.').attr('id', '');

    // === ColorPicker ===
    if($.fn.ColorPicker){
      $('input.color-picker').each(function(){
        var $input = $(this);
        var name = $input.attr('name');
        $( "<span class=\"color-check color-"+name+"\"></span>" ).insertAfter( $input );
        $input.ColorPicker({
          onChange:function (hsb, hex, rgb) {
           $('span.color-' + name).css('backgroundColor', '#' + hex);
            $input.val( '#' + hex );
          }
       });
      });
    };

    $('input.color-picker').on('change', function(){
      var name = $(this).attr('name');
      $('span.color-' + name).css('backgroundColor', $(this).val());
    });

    $('input.color-picker').each(function(){
      $color = $(this).val();
      $name = $(this).attr('name');
      $('span.color-' + $name).css('backgroundColor', $color);
    });


    $('.home_page_search .bb-container').attr('class', 'container');
    var html_code = "<option value ='All'>None</option>";
	$('#edit-field-category-type-value-1').html(html_code);
    $('#edit-field-category-type-value').on('change', function(){
      $category_value = $('#edit-field-category-type-value').val();
      $.get(drupalSettings.path.baseUrl +'get/category/links?id='+ $category_value, null, function(response) {
        $('#edit-field-category-type-value-1').html(response);
      });
	  if($category_value == 'All'){
		var html_code = "<option value ='All'>None</option>";
		$('#edit-field-category-type-value-1').html(html_code);
	  }
    });


    $('#edit-field-category-type-value-1').on('change', function(){
      $category_link = $('#edit-field-category-type-value-1').val();
	  if($category_link !== 'All'){
	    window.open($category_link);
	  }
    });
	$('#edit-submit-fast-search').click(function(){
		$url_value = $('#edit-field-category-type-value-1').val();
		if($url_value !== 'All'){
		  window.open($url_value);
		}
    });
	$('.home_page_search .form-actions').attr('id', 'fast_Search_div');
    document.getElementById("fast_Search_div").innerHTML =  "";
	document.getElementById('edit-submit-fast-search').type = 'hidden';
  });

  $(window).load(function(){

    $('input.color-picker').each(function(){
      $color = $(this).val();
      $name = $(this).attr('name');
      $('span.color-' + $name).css('backgroundColor', $color);
    });
  })

  $(document).ready(function(){
    function getByClass(sClass){
      var aResult=[];
      var aEle=document.getElementsByTagName('*');
      for(var i=0;i<aEle.length;i++){
        /*foreach className*/
        var arr=aEle[i].className.split(/\s+/);
        for(var j=0;j<arr.length;j++){
          /*check class*/
          if(arr[j]==sClass){
            aResult.push(aEle[i]);
          }
        }
      }
      return aResult;
    };

    $(document).ready(function(){
      $('#block-studentactivitiesitems ol > li').click(function() {
        $(this).children('ul').fadeToggle()
      })
    });
    function runRender(type){
      var aBox = getByClass("code_"+type);
      for(var i=0;i < aBox.length; i++){
        var editor = false;
        if(!editor){
          editor = CodeMirror.fromTextArea(aBox[i], {
            lineNumbers: true,
            mode: "text/css",
          });
        }
        editor.on("blur", function() {editor.save()});
      }
    };

    runRender('css');
    $('a[href="#edit-css-customize"]').click(function(){
      runRender('css');
    })
  })


})(jQuery);
