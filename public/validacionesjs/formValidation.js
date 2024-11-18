//validacion para el formulario create.blade.php
        document.getElementById('form_create').addEventListener('submit', function(e){
            e.preventDefault();//evita el envio del formulario

            const name = document.getElementById('name').value;
            const descripcion = document.getElementById('descripcion').value;
            const categoria = document.getElementById('categoria').value;
            const errorDiv = document.getElementById('errorDiv');
            errorDiv.textContent = ''; //limpia mjs de error previo
            
            alert('validacion iniciada');
            
            if(name.length < 3){
                errorDiv.textContent +='El nombre debe tener al menos 3 caracteres.\n';
            }
            if(descripcion.length < 10){
                errorDiv.textContent += 'La descripcion debe tener al menos 10 caracteres.\n';
            }
            if(categoria.length < 6){
                errorDiv.textContent += 'la categoria debe tener al menos 8 caracteres.\n';
            }
            if(errorDiv.textContent === ''){
                this.submit(); //si no hay errores puedes enviar el formulario
            }            
        });