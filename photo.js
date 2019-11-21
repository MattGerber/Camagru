var video = document.getElementById('video'),
    photo = document.getElementById('photo'),
    canvas = document.getElementById('canvas'),
    canvas2 = document.getElementById('canvas2'),
    context2 = canvas2.getContext('2d'),
    context= canvas.getContext('2d');
var rect= canvas.getBoundingClientRect();
console.log("ctop"+rect.top);
console.log("cbot"+rect.bottom);
console.log("cleft"+rect.left);
console.log("cright"+rect.right);
// canvas2.style.top = canvas.style.top;
// canvas2.style.left = canvas.style.left;
// canvas2.style.right = canvas.style.right;
// canvas2.style.bottom = canvas.style.bottom;
(function(){
        // vendorUrl = window.URL || window.webkitURL;
        navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia ||
        navigator.mozGetUserMedia || navigator.oGetUserMedia || navigator.msGetUserMedia;
    
    photo.addEventListener('change', draw, false);
    
    // document.getElementById('sticker').addEventListener('click', function(){
    //     console.log('abbababaiusbdiabid');
    //     alert(this.src);
    // });
    // document.getElementById('blah').addEventListener('click', function(){
    //     console.log('abbababaiusbdiabid');
    //     alert(this.src);
    // });
    document.getElementById('capture').addEventListener('click', function(){
        canvas.width=400;
        canvas.height=300;
        context.drawImage(video, 0, 0, 640, 480, 0, 0, canvas.width, canvas.height);
    });
    
    
    if (navigator.getUserMedia){
        navigator.getUserMedia({video:true}, streamWebCam, throwError);
    }
    function streamWebCam(stream){
        video.srcObject = stream;
        video.play();
    }
    function throwError(e){
        alert(e.name);
    }
    
    function draw(e){
        var reader = new FileReader();
        reader.onload = function(event){
 
            var img = new Image();
 
            img.onload = function(){
 
                canvas.width=400;
                canvas.height=300;
                context.drawImage(img, 0, 0, img.width, img.height, 0, 0, canvas.width, canvas.height);
            }
            img.src = event.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);     
 
    };
 
})();
    function getImgSrc(){
        var img = new Image();
        var sticker = new Image();
        img.src = canvas.toDataURL();
        sticker.src = canvas2.toDataURL();
        var button = document.getElementById('post');
        button.value=img.src+"#"+sticker.src;
        console.log(button.value);
    }

    function getSticker(src){
        // alert(src);
        var img = new Image();
        // document.getElementById('filter').setAttribute('src',src);
        img.src=src;
        img.onload = function(){
            // context.setA
        canvas2.width=400;
        canvas2.height=300;
        context2.drawImage(img, 0, 0, img.width, img.height, 0, 0, canvas2.width, canvas2.height);
            console.log(src);
        }
    }
    