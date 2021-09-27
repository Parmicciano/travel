<div class="mb-3 pt-0 inline">
  <form method="GET" action="search.php">
  
      
    <!---  <svg>
        <path
          d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z" />
        </svg> --->
        
        <label>
        <input type="submit" style="display:none">
        <svg id="search-icon" class="search-icon" viewBox="0 0 24 24">
<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
<path fill="none" d="M0 0h24v24H0z">
      </svg>
</label>
  
    <input type="text" id="search" name="search" placeholder="Mon futur voyage"
      class="float-right px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full">



 
  </form>


</div>


<style>
  #search {
    width: 210px !important;

  }

  svg {

    float: right !important;
    margin-left: 12px !important;
  }

  #fox {

    margin-left: 25px !important;
    margin-right: 25px !important;
  }
  form.hide-submit input[type="submit"] { display: none;}

#search-icon {
  fill:#000;
  height: 40px;
  width: 40px;
}

</style>