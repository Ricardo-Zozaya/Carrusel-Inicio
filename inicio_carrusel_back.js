
       /* var datos1 = [      /*comparar
            {
              titulo: "Nuestra Miel"
            },
            {
            titulo: "Misión"
              },
              {
                titulo: "Visión"
              },
                
        ];*/

      

        function mostrarDato1(dato1, index1) {
            // escribir adentro del ul el formato del li
           // var contenedorDatos1 = document.getElementById("datos1");
           
            contenedorDatos1.insertAdjacentHTML('beforeEnd',`<li class="dato1" )>
            <div class="actions"> 
            <a id="iconoBasura" onClick="eliminarAgenda1(` + index1.id + `)" target="_self">boton de basura</a>
            <a id="iconoEdit" onClick="editarFormulario(` + index1.id + `)" target="_self">boton de edit</a>
            </div>
            <div class="dato">
            <span>` + dato1.fotoCarrusel + `</span>
            </div>
            <h3>` + dato1.titulo_carrusel_inicio + `</h3>
            <div class="datos">
            <div class="dato">
             <span>` + dato1.descripcion_carrusel_inicio + `</span>
             </div>
             <div class="dato">
             <span>` + dato1.vinculo_carrusel_inicio + `</span>
             </div>
             </div>
              </li>`);
          }

        
           
        
          
          function mostrarTodosLosDatos1() {
           /* var contenedorDatos1 = document.getElementById("datos1");
            contenedorDatos1.innerHTML = ""; //para que no se hagan mas contactos de los que deberían*/
            datos1.forEach(mostrarDato1);
          }
          
          mostrarTodosLosDatos1();

          function eliminarAgenda1(index1) {
            if (confirm("¿Seguro que deseas eliminar este contenido?")) {
            datos1.splice(index1, 1);
            mostrarTodosLosDatos1();
            }
          }

          function limpiarFormulario() {
            document.getElementById("tx1").value = ''; 
            document.getElementById("tx2").value = '';
            document.getElementById("tx3").value = '';
         }

        function abrirFormulario(){
            document.getElementById('modal').style.display='block';
            limpiarFormulario();
        }
        
        function cerrarFormulario(){
        document.getElementById('modal').style.display='none';
        }

        
  
        function cerrarFormularioAgregandoDatos(){
          document.getElementById('modal').style.display='none';
        var imagen = document.getElementById("agregarFoto").value;
        var info1 = document.getElementById("tx1").value;
        var info2 = document.getElementById("tx2").value;
        var info3 = document.getElementById("tx3").value;
        
        datos1.push({
          foto: imagen,
          titulo: info1,
          descripcion: info2,
          hipervinculo: info3
        });
        mostrarTodosLosDatos1();
       
      }
        
  

        function editarFormulario(index1) {
            document.getElementById('modal').style.display='block';
            /*document.getElementById("agregarFoto").value = datos1[index1].foto;*/
            document.getElementById("tx1").value = datos1[index1].titulo;
            document.getElementById("tx2").value = datos1[index1].descripcion;
            document.getElementById("tx3").value = datos1[index1].hipervinculo;
            document.getElementById("accion").value = "editar";
        }
    