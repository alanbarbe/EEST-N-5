class CEmpleado{

    constructor(nombre, anioing, salario, direccion){
        this.nombre = nombre;
        this.anioing = anioing;
        this.salario = salario;
        this.direccion = direccion;
    }
    getNombre(){
        return this.nombre;
    }
    getAnioing(){
        return this.anioing;
    }
    getDireccion(){
        return this.direccion;
    }
}

const empleado1 = new CEmpleado("Robert", 1994, 100000, "64C- WallsStreat");
const empleado2 = new CEmpleado("Sam", 2000, 20000, "68D- WallsStreat");
const empleado3 = new CEmpleado("John", 1999, 50000, "26B- WallsStreat");
    
document.write(
    "<table>"
    +"<tr>"
    +"<th>Nombre</th>"
    +"<th>Año de ingreso</th>"
    +"<th>Dirección</th>"
    +"</tr>"
    +"<tr>"
    +"<td>"+empleado1.getNombre()+"</td>"
    +"<td>"+empleado1.getAnioing()+"</td>"
    +"<td>"+empleado1.getDireccion()+"</td>"
    +"</tr>"
    +"<tr>"
    +"<td>"+empleado2.getNombre()+"</td>"
    +"<td>"+empleado2.getAnioing()+"</td>"
    +"<td>"+empleado2.getDireccion()+"</td>"
    +"</tr>"
    +"<tr>"
    +"<td>"+empleado3.getNombre()+"</td>"
    +"<td>"+empleado3.getAnioing()+"</td>"
    +"<td>"+empleado3.getDireccion()+"</td>"
    +"</tr>"
);
