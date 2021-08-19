
<form action="/crud-project/index.php" method="post">
  <div class="mb-3 ">
    <label for="title" class="form-label">Title of the notes</label>
    <input type="text" class="form-control" id="title" name="title" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="notes" class="form-label">Notes</label>
    <textarea class="form-control" id="notes" name="notes" rows="3" onclick="divide()"></textarea>
    <label for="notes" class="form-label fw-lighter">(For new line add 'br' tag)</label>
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>