<body>
  <?php include 'email_form.php'; ?>
    <div class="container border p-5">
  <div class="container">
    <div class="text-center">
      <center><a href="../index.html"><img src="../img/logo.png" alt="" title="" /></a></center>
      <br>
      <h2>FireFlyCoffee Franchise</h2>
      <p class="lead">Başvuru için aşağıdaki soruları eksiksiz doldurun</p>
    </div>
    <center><?php echo $alert; ?></center>
    <hr>
    <div class="row justify-content-center my-5">
      <div class="col-lg-6">
        <form class="contact" action="" method="post">
          <label for="email" class="form-label">Email:</label>
          <input
            name ="email"
            type="email"
            id="email"
            placeholder="my@gmail.com"
            class="form-control"
          />

          <div class="form-floating my-5">
            <input
              name="name"
              type="text"
              id="firstname"
              placeholder="e.g. Dawid"
              class="form-control"
            />
            <label for="name" class="form-label">Adınız Soyadınız:</label>


          </div>

            <div class="form-floating my-5">
              <input
                name="number"
                type="number"
                id="number"
                placeholder="05555555555"
                class="form-control"
              />
              <label for="number" class="form-label">Telefon Numaranız:</label>
            </div>

          <div class="form-floating my-5">
            <textarea
              name="message"
              id="query"
              style="height: 150px"
              class="form-control"
              placeholder="Eklemek istedikleriniz"
            ></textarea>

            <label for="query">Eklemek İstedikleriniz</label>
          </div>

          <div class="text-center">
            <button name="submit" type="submit" class="btn btn-primary">Gönder</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
