const $seleccionArchivos = document.querySelector("#files"),
    $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

// Escuchar cuando cambie
$seleccionArchivos.addEventListener("change", () => {
    // Los archivos seleccionados, pueden ser muchos o uno
    document.getElementById("imagenPrevisualizacion").style.display = "block";
    const archivos = $seleccionArchivos.files;
    // Si no hay archivos salimos de la función y quitamos la imagen
    if (!archivos || !archivos.length) {
        $imagenPrevisualizacion.src = "";
        return;
    }
    // Ahora tomamos el primer archivo, el cual vamos a previsualizar
    const primerArchivo = archivos[0];
    // Lo convertimos a un objeto de tipo objectURL
    const objectURL = URL.createObjectURL(primerArchivo);
    // Y a la fuente de la imagen le ponemos el objectURL
    $imagenPrevisualizacion.src = objectURL;
});

async function reduce_image_file_size(base64Str, MAX_WIDTH = 800, MAX_HEIGHT = 800) {
    let resized_base64 = await new Promise((resolve) => {
        let img = new Image()
        img.src = base64Str
        img.onload = () => {
            let canvas = document.createElement('canvas')
            let width = img.width
            let height = img.height

            if (width > height) {
                if (width > MAX_WIDTH) {
                    height *= MAX_WIDTH / width
                    width = MAX_WIDTH
                }
            } else {
                if (height > MAX_HEIGHT) {
                    width *= MAX_HEIGHT / height
                    height = MAX_HEIGHT
                }
            }
            canvas.width = width
            canvas.height = height
            let ctx = canvas.getContext('2d')
            ctx.drawImage(img, 0, 0, width, height)
            resolve(canvas.toDataURL()) // this will return base64 image results after resize
        }
    });
    return resized_base64;
}

async function image_to_base64(file) {
    let result_base64 = await new Promise((resolve) => {
        let fileReader = new FileReader();
        fileReader.onload = (e) => resolve(fileReader.result);
        fileReader.onerror = (error) => {
            console.log(error)
            alert('An Error occurred please try again, File might be corrupt');
        };
        fileReader.readAsDataURL(file);
    });
    return result_base64;
}

async function process_image(file, min_image_size = 300) {
    const res = await image_to_base64(file);
    if (res) {
        const old_size = calc_image_size(res);
        if (old_size > min_image_size) {
            const resized = await reduce_image_file_size(res);
            const new_size = calc_image_size(resized)
            return resized;
        } else {
            return res;
        }

    } else {
        console.log('return err')
        return null;
    }
}

/*- NOTE: USE THIS JUST TO GET PROCESSED RESULTS -*/
async function preview_image() {
    const file = document.querySelector("#files");
    const image = await process_image(file.files[0]);
}

/*- NOTE: USE THIS TO PREVIEW IMAGE IN HTML -*/
async function preview_image() {
    const file = document.querySelector("#files");
    const res = await image_to_base64(file.files[0])
    if (res) {
        document.getElementById("old").src = res;

        const olds = calc_image_size(res)
        console.log('Old ize => ', olds, 'KB')

        const resized = await reduce_image_file_size(res);
        const news = calc_image_size(resized)
        console.log('new size => ', news, 'KB')
        document.getElementById("new").src = resized;
    } else {
        console.log('return err')
    }
}

function getBase64Image(img) {
    var canvas = document.createElement("canvas");
    canvas.width = img.width;
    canvas.height = img.height;
    var ctx = canvas.getContext("2d");
    ctx.drawImage(img, 0, 0);
    var dataURL = canvas.toDataURL();
    ReporteActualizacion(dataURL);
}

function getBase64ImageAlta(img) {
    var canvas = document.createElement("canvas");
    canvas.width = img.width;
    canvas.height = img.height;
    var ctx = canvas.getContext("2d");
    ctx.drawImage(img, 0, 0);
    var dataURL = canvas.toDataURL();
    Ingreso(dataURL);
}
function getBase64Actualizacion(img) {
    var canvas = document.createElement("canvas");
    canvas.width = img.width;
    canvas.height = img.height;
    var ctx = canvas.getContext("2d");
    ctx.drawImage(img, 0, 0);
    var dataURL = canvas.toDataURL();
    Actualizar(dataURL);
}

function calc_image_size(image) {
    let y = 1;
    if (image.endsWith('==')) {
        y = 2
    }
    const x_size = (image.length * (3 / 4)) - y
    return Math.round(x_size / 1024)
}


function test() {
    getBase64Image(document.getElementById("new"));
}

function testAlta() {
    getBase64ImageAlta(document.getElementById("new"));
}
function testActualizacion() {
    getBase64Actualizacion(document.getElementById("new"));
}