//Select all images except the shopping cart
const images = document.querySelectorAll(".field-image img:not(.Shopping)");
const elements = document.querySelectorAll(".field-image img:not(.Shopping)");


function getAverageColor(image) {
    const canvas = document.createElement("canvas");
    const ctx = canvas.getContext("2d");
    ctx.drawImage(image, 0, 0);
    const imageData = ctx.getImageData(0, 0, image.width, image.height);
    let data = imageData.data;
    let r = 0;
    let g = 0;
    let b = 0;
    let count = 0;
    for (let i = 0, len = data.length; i < len; i += 4) {
        if (data[i+3]>0) {
            r += data[i];
            g += data[i+1];
            b += data[i+2];
            count++;
        }
    }
    r = Math.floor(r/count);
    g = Math.floor(g/count);
    b = Math.floor(b/count);
    return "rgb("+r+","+g+","+b+")";
}
images.forEach(image=>{
    // Get the average color of the image
    const averageColor = getAverageColor(image);
    // Set the initial box-shadow
    image.style.boxShadow = averageColor +"0 0 20px 8px" ;
})


