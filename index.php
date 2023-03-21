<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Navbar Örneği</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<style>
  .login-form {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
    padding: 20px;
  }
  
  .login-form h4 {
    color: #333;
    font-weight: bold;
    margin-bottom: 20px;
    text-align: center;
  }
  
  .login-form label {
    color: #666;
    font-weight: bold;
  }
  
  .login-form input {
    border-radius: 5px;
    margin-bottom: 10px;
  }
  
  .login-form button {
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    color: #fff;
    font-weight: bold;
    margin-top: 20px;
    padding: 10px 30px;
    transition: background-color 0.2s ease;
  }
  
  .login-form button:hover {
    background-color: #0062cc;
    cursor: pointer;
  }
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="img/uni_logo.gif" alt="Logo"></a>
  <div class="navbar-text mx-auto" style="color: white;">
    MERSİN ÜNİVERSİTESİ <br>
    <span style="font-size: 0.8em; text-align: right; margin-left: 20px;">ÖĞRENCİ BİLGİ SİSTEMİ</span>
  </div>
</nav><br>
  <div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary btn-lg btn-block my-3" onclick="window.location.href='https://obs.mersin.edu.tr/oibs/ogrsis/no_query.aspx'">Öğrenci Numaranızı Sorgulayın</button>
    </div>
    <div class="col-lg-6">
    <button type="button" class="btn btn-secondary btn-lg btn-block my-3" style="background-color: #007bff;" onclick="window.location.href='https://play.google.com/store/apps/details?id=com.prolizyazilim.mobil&hl=tr&gl=US'">ÖBS Mobil Uygulama(Play Store)</button>
    </div>
    <div class="col-lg-6">
    <button type="button" class="btn btn-secondary btn-lg btn-block my-3" style="background-color: #007bff;" onclick="window.location.href='https://apps.apple.com/tr/app/proliz-mobil/id1377651655?l=tr'">ÖBS Mobil Uygulama(App store)</button>
    </div>
  </div>
</div>

  <hr>

  <div class="container my-4">
    <div class="row">
      <div class="col-md-6">
        <h4>Giriş Yap</h4>
        <form>
          <div class="form-group">
            <label for="username"></label>
            <input type="text" class="form-control form-control-sm" id="username" placeholder="Kullanıcı Adı" style="max-width: 300px;">
          </div>
          <div class="form-group">
            <label for="password"></label>
            <input type="password" class="form-control form-control-sm" id="password" placeholder="Şifre" style="max-width: 300px;">
          </div>
          <button type="submit" class="btn btn-primary">Giriş Yap</button>
        </form>
      </div>
      <div class="col-md-6">
  <h4>MEU Sosyal Medya Hesaplarımız</h4>
  <div class="social-icons">
  <a href="https://tr-tr.facebook.com/meukurumsal" target="_blank"><img src="img/facebook.png" alt="Facebook" width="70" height="70"></a>
  <a href="https://twitter.com/meukurumsal" target="_blank"><img src="img/twitter.png" alt="Twitter" width="70" height="70"></a>
  <a href="https://www.instagram.com/meukurumsal " target="_blank"><img src="img/instagram.png" alt="Instagram" width="70" height="70"></a>
  <a href="https://www.youtube.com/c/meukurumsal" target="_blank"><img src="img/youtube.png" alt="Youtube" width="70" height="70"></a>
</div>
</div>

    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>