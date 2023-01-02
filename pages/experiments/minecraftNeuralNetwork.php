<!DOCTYPE html>
<html>
<head>
  <title>Minecraft Classifier</title>
    <link rel="apple-touch-icon" href="/images/favicon.ico">
   <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="icon" type="icon" href="/images/favicon.ico" sizes="16x16">
    <link rel="stylesheet" href="/styles/styles.css">
    <script src="/scripts/scripts.js"></script>
</head>
<body>
  <input type="file"
       id="image" name="image"
       accept="image/png, image/jpeg"><br>
<button type="button" onclick="init()">Start</button><br>

<img id="imageD">
<p id="working"></p>
<div id="label-container"><p>Minecraft Item: </p><p>Minecraft Block: </p><p>Minecraft Entity: </p></div>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.3.1/dist/tf.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@0.8/dist/teachablemachine-image.min.js"></script>
<script type="text/javascript">
    // More API functions here:
    // https://github.com/googlecreativelab/teachablemachine-community/tree/master/libraries/image

    // the link to your model provided by Teachable Machine export panel
    const URL = "https://teachablemachine.withgoogle.com/models/3hcYODFdT/";

    let model, labelContainer, maxPredictions, theImage;
  
    // Load the image model and setup the webcam
    async function init() {
      document.getElementById("working").innerHTML = "Working..."
        const modelURL = URL + "model.json";
        const metadataURL = URL + "metadata.json";

        // load the model and metadata
        // Refer to tmImage.loadFromFiles() in the API to support files from a file picker
        // or files from your local hard drive
        // Note: the pose library adds "tmImage" object to your window (window.tmImage)
        model = await tmImage.load(modelURL, metadataURL);
        maxPredictions = model.getTotalClasses();
      labelContainer = document.getElementById("label-container")
      
    var tgt = document.getElementById("image"),
        files = tgt.files;
    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById("imageD").src = fr.result;
        }
        fr.readAsDataURL(files[0]);
    }
    else {
    }
        setTimeout(predict,1000)
    }

    async function loop() {
        await predict();
    }

    // run the webcam image through the image model
    async function predict() {
        // predict can take in an image, video or canvas html element
        const prediction = await model.predict(document.getElementById("imageD"));
        for (let i = 0; i < maxPredictions; i++) {
          let pname = {"Minecraft It...":"Minecraft Item","Minecraft Bl...":"Minecraft Block","Minecraft En...":"Minecraft Entity"};
            const classPrediction =
              pname[prediction[i].className] + ": " + prediction[i].probability.toFixed(2)*100+"%";
            labelContainer.childNodes[i].innerHTML = classPrediction;
        }
      document.getElementById("working").innerHTML = ""
    }
</script>
</body>
</html>