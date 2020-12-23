<!DOCTYPE html>
<html>
<body style="font-family: Arial, Helvetica, sans-serif;">
<form style=" border: 3px solid #f1f1f1;
  font-family: Arial;">
  <div style="padding: 20px;
  background-color: #f1f1f1;">
    <h2>THÔNG TIN KHÁCH HÀNG CẦN TƯ VẤN</h2>
    <p>Lưu lại thông tin liên hệ của khách.</p>
  </div>
  <div class="container" style="background-color:white;padding: 20px;">
    <label for="formGroupExampleInput">Họ Tên:</label><br>  
    <input type="text" value="{{ $HoTen }}" name="name" required disabled style="width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;"><br>
    <label>Doanh nghiệp:</label><br>
      <input type="text" value="{{ $Company }}" name="subject" required disabled style="width: 100%;
    padding: 12px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;"><br>
    <label>Email:</label><br>
    <input type="text" value="{{ $Email }}" name="mail" required disabled style="width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;"><br>
    <label>Số Điện Thoại:</label><br>
    <input type="text" value="{{ $Phone }}" name="phone" required disabled style="width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;"><br>
    <label>Nội Dung:</label><br>
    <textarea name="content" required disabled style="width: 100%; resize: none!important" rows="3"> {{ $Content }}</textarea>
  </div>
</form>
</body>
</html>