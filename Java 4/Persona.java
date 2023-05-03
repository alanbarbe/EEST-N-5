package modelo;

public class Persona {

	private String nombre;
	private String apellido;
	private String ocupacion;
	private int edad;
	public String getNombre() {
		return nombre;
	}
	public void setNombre(String nombre) {
		this.nombre = nombre;
	}
	public String getApellido() {
		return apellido;
	}
	public void setApellido(String apellido) {
		this.apellido = apellido;
	}
	public String getOcupacion() {
		return ocupacion;
	}
	public void setOcupacion(String ocupacion) {
		this.ocupacion = ocupacion;
	}
	public int getEdad() {
		return edad;
	}
	public void setEdad(int edad) {
		this.edad = edad;
	}
	
	public String misDatos(){
		String datos = "";
		datos = "Nombre: " + this.getNombre() + " Apellido: " + this.getApellido() + " Ocupación: " + this.getOcupacion() + " Edad: " + this.getEdad();
		return datos;
		
	}
}
