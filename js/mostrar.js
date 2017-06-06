function mostrarBiblioteca(){
    document.getElemenetById('biblioteca').style.display='block';
    document.getElemenetById('recomendaciones').style.display='none';
    document.getElemenetById('clientes').style.display='none';
    document.getElemenetById('categorias').style.display='none';
}
function mostrarRecomendaciones(){
    document.getElemenetById('biblioteca').style.display='none';
    document.getElemenetById('recomendaciones').style.display='block';
    document.getElemenetById('clientes').style.display='none';
    document.getElemenetById('categorias').style.display='none';
}
function mostrarClientes(){
    document.getElemenetById('biblioteca').style.display='none';
    document.getElemenetById('recomendaciones').style.display='none';
    document.getElemenetById('clientes').style.display='block';
    document.getElemenetById('categorias').style.display='none';
}
function mostrarCategorias(){
    document.getElemenetById('biblioteca').style.display='none';
    document.getElemenetById('recomendaciones').style.display='none';
    document.getElemenetById('clientes').style.display='none';
    document.getElemenetById('categorias').style.display='block';
}



