const picker = document.querySelector('.date');
if(picker){
  const datepicker = new Datepicker(picker, {
    autohide:true,
    format: 'dd/mm/yyyy',
    clearBtn: true,
  }); 
}