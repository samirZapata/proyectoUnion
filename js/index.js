const dropArea = document.querySelector('.drop-area');
const dragText = dropArea.querySelector('h2');
const button = dropArea.querySelector('button');
const input = dropArea.querySelector('#input-file');
let files;


button.addEventListener('click', (e)  => {
   input.click();   
});

input,addEventListener('change', (e) => {
    filed = this.files;
    dropArea.classList.add("active");
    showfiles(files);
    dropArea.classList.remove("active");
});

dropArea.addEventListener('dragover', (e) => {
    e.preventDefault();
    dropArea.classList.add('active');
    dragText.innerHTML = 'Suelta aqui el archivo...';
});

dropArea.addEventListener('dragleave', (e) => {
    e.preventDefault();
    dropArea.classList.remove('active');
    dragText.innerHTML = 'Arrastra y suelta imagenes...';
});

dropArea.addEventListener('drop', (e) => {
    e.preventDefault();
    files = e.dataTransfer.files; 
    showfiles(files);
    dropArea.classList.remove('active');
    dragText.innerHTML = 'Arrastra y suelta imagenes...';
});

function showfiles(files){
    if(files.leght == undefined){
        processFile(files);
    }else{
        for(const file of files){
            processFile(file);
        }
    }
}

function processFile(file){
    const docType = file.type;
    const validExtensions = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];

    if(validExtensions.includes(docType)){
        //archivo valido
        const FileReader = new FileReader();
        const id = `file-${Math.random().toString(32).substring(7)}`;

        FileReader.addEventListener('load', (e) => {
            const fileUrl = fileReader.result;
            const image = `
                <div id="${id}" class="file-container">
                    <img src="${fileUrl}" alt="${file.name}" width="50">
                    <div class="status">
                        <span>${file.name}</span>
                        <span class="status-text">Cargando...</span>
                    </div>
                </div>
            `;
            const html = document.querySelector('#preview').innerHTML;
            document.querySelector('#preview').innerHTML = image + html;
        });
        fileReader.readAsDataURL(file);
        uploadFile(file, id);
    }else{
        //archivo invalido
        alert('Archivo invalido');
    }
}

