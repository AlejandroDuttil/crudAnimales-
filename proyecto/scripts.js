$(document).ready(function() {
    loadAnimals();

    $('#submitBtn').on('click', function() {
        let formData = {
            id: $('#id').val(),
            propietario_nombre: $('#propietario_nombre').val(),
            propietario_apellido: $('#propietario_apellido').val(),
            propietario_celular: $('#propietario_celular').val(),
            genero_mascota: $('#genero_mascota').val(),
            tipo_mascota: $('#tipo_mascota').val(),
            nombre_mascota: $('#nombre_mascota').val(),
            fecha_nacimiento: $('#fecha_nacimiento').val(),
        };

        // Validar campos antes de enviar
        if (formData.propietario_nombre && formData.propietario_apellido && formData.propietario_celular && formData.genero_mascota && formData.tipo_mascota && formData.nombre_mascota && formData.fecha_nacimiento) {
            $.ajax({
                url: 'save.php',
                method: 'POST',
                data: formData,
                success: function(response) {
                    $('#animalForm')[0].reset();
                    loadAnimals();
                }
            });
        } else {
            alert('Por favor, complete todos los campos obligatorios.');
        }
    });

    $(document).on('click', '.edit-btn', function() {
        let id = $(this).data('id');
        $.ajax({
            url: 'get.php',
            method: 'GET',
            data: { id: id },
            success: function(response) {
                let animal = JSON.parse(response);
                $('#id').val(animal.id);
                $('#propietario_nombre').val(animal.propietario_nombre);
                $('#propietario_apellido').val(animal.propietario_apellido);
                $('#propietario_celular').val(animal.propietario_celular);
                $('#genero_mascota').val(animal.genero_mascota);
                $('#tipo_mascota').val(animal.tipo_mascota);
                $('#nombre_mascota').val(animal.nombre_mascota);
                $('#fecha_nacimiento').val(animal.fecha_nacimiento);
            }
        });
    });

    $(document).on('click', '.delete-btn', function() {
        let id = $(this).data('id');
        $.ajax({
            url: 'delete.php',
            method: 'POST',
            data: { id: id },
            success: function(response) {
                loadAnimals();
            }
        });
    });

    function loadAnimals() {
        $.ajax({
            url: 'list.php',
            method: 'GET',
            success: function(response) {
                $('#animalTable tbody').html(response);
            }
        });
    }
});
