<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
        />
</head>
<body>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h1 class="mb-4 text-center">Contact Us</h1>
        <form method="post" action="../practice/validation.php">
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input
              type="text"
              class="form-control"
              id="name"
              placeholder="Enter your name"
              name="name"
              required
              />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="Enter your email"
              required
              />
          </div>
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input
              type="text"
              class="form-control"
              id="subject"
              placeholder="Enter subject"
              name="subject"
                  />
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea
              class="form-control"
              id="message"
              name="message"
              rows="5"
              placeholder="Write your message here"
              required
              ></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>
    </div>
  </div>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        ></script>
</body>
</html>
