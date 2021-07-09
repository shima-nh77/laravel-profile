  //   تب های صفحه ی سفارشات
  function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
  document.getElementById("defaultOpen").click();

//   ظاهر شدن جدول جزییات سفارش
    $(".orderdetails").click(function () {
        $(".tblorderdetail").fadeToggle(500);
    });

// فرم افزودن آدرس
$(".addingaddressbtn").click(function(){
    $(".addresstable").fadeToggle(500);
});

//استان و شهر 
loadOstan('ostan');
$("#ostan").change(function(){
  var i=$(this).find('option:selected').val();
 ldMenu(i,'city');
 $('.selectpicker').selectpicker('refresh');
});
