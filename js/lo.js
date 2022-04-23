$(".btnedit").click(e =>{
    let txtValues = displayData(e);
    
    let id = $("input[name*='id_perfil']");
    let perfiles = $("input[name*='perfiles']");

    id.val(txtValues[0]);
    perfiles.val(txtValues[1]);

});

function displayData(e) { 
    let id = 0;
    const td  = $("#tbody tr td");
    let txtValues = [];
    for(const value of td){
        if ( value.dataset.id_perfil == e.target.dataset.id_perfil ) {
            txtValues[id_perfil++] = value.txtContent;
        }
    }
    return txtValues; 
 }