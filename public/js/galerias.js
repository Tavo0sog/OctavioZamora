function galeria_productos(){
    document.getElementById("container_productos").style.display = "grid";
    document.getElementById("container_paisajes").style.display = "none";
    document.getElementById("container_alimentos").style.display = "none";
};

function galeria_paisajes(){
    document.getElementById("container_paisajes").style.display = "grid";
    document.getElementById("container_productos").style.display = "none";
    document.getElementById("container_alimentos").style.display = "none";
    
};

function galeria_alimentos(){
    document.getElementById("container_alimentos").style.display = "grid";
    document.getElementById("container_paisajes").style.display = "none";
    document.getElementById("container_productos").style.display = "none";
};