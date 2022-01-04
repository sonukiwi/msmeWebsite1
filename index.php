<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sanyug Drugs</title>
    <link rel="stylesheet" href="css/vishal.css">
    <script src="script/myScript.js"></script>
    <script src="https://kit.fontawesome.com/e166fea5a2.js" crossorigin="anonymous"></script>
  </head>
  <body>
  
  <?php include 'components/navbar.php'; ?>
  <div class="carouselAndButtons" style="margin-top:56px;">
    <div></div>
  <?php include 'components/carousel.php'; ?>
  <div></div>
  </div>
  <div style="font-size:32px;display:flex;justify-content:center;align-items:center;color:white;margin-top:8px;">
    <i class="fas fa-arrow-left" data-bs-target="#carouselExampleFade" data-bs-slide="prev"></i>
    <i class="fas fa-arrow-right" data-bs-target="#carouselExampleFade" data-bs-slide="next"></i>
  </div>


  <div style="font-size:20px;word-spacing:4px;letter-spacing:1.6px;font-weight:bold;margin-top:32px;display:flex;justify-content:center;align-items:center;flex-direction:column;">
    <p>Our Few Products</p>
    <div class="container">
      <div class="row" style="display:flex;justify-content:center;align-items:center;">
            <div class="col-md-3 mx-1 mt-5 oneOfThreeProductCards" style="height:38vh;border:1px solid gray;box-shadow:1px 1px black;text-align:center;">
            <div style="transform:translateY(-50px);background-image:url('https://previews.123rf.com/images/digicomphoto/digicomphoto1603/digicomphoto160300044/54781801-open-medicine-packet-labelled-happiness-opened-at-one-end-to-display-a-blister-pack-of-tablets-isola.jpg');
            background-position:center;background-size:100% 100%;height:30vh;border:1px solid gray;
            ">
                
            </div>
            <p>Cancer</p>
            </div>
            <div class="col-md-3 mx-1 mt-5 oneOfThreeProductCards" style="height:38vh;border:1px solid gray;box-shadow:1px 1px black;text-align:center;">
            <div style="transform:translateY(-50px);background-image:url('https://thumbs.dreamstime.com/z/open-medicine-packet-labelled-calmness-opened-one-end-to-display-blister-pack-tablets-white-67692913.jpg');
            background-position:center;background-size:100% 100%;height:30vh;border:1px solid gray;
            ">
                
            </div>
            <p>Diabetes</p>
            </div>
            <div class="col-md-3 mx-1 mt-5 oneOfThreeProductCards" style="height:38vh;border:1px solid gray;box-shadow:1px 1px black;text-align:center;">
            <div style="transform:translateY(-50px);background-image:url('https://www.designerpeople.com/wp-content/uploads/2019/05/medicine-packet-design.jpg');
            background-position:center;background-size:100% 100%;height:30vh;border:1px solid gray;
            ">
                
            </div>
            <p>AIDS</p>
            </div>
      </div>
    </div>
    <div class="container" style="display:flex;justify-content:center;">
      <div class="row my-4" style="width:fit-content;">
        <button class="btn btn-success">View All Products</button>
      </div>
    </div>
  </div>

  <div style="margin-top:40px;">
        <div class="container">
          <div style="height:40vh;background-image:url('data:image/jpeg;base64,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');
          background-position:center;background-size:100% 100%;">
          <form action="" style="height:inherit;justify-content:center;display:flex;
          align-items:center;flex-direction:column;">
              <p style="color:white;font-weight:bolder;">How Can We Help You ?</p>
              <input required class="contactUsInputOnImage" type="email" class="my-2" placeholder="Email Address" style="padding:8px;width:24vw;border:1px solid gray;height:32px;">
              <input required class="contactUsInputOnImage" type="text" class="my-2" placeholder="Message" style="padding:8px;width:24vw;border:1px solid gray;height:32px;">
              <button type="submit" class="btn btn-danger my-3" style="border-radius:0px !important;">Submit</button>
          </form>
          </div>
        </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>