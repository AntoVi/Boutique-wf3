            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="<?= URL ?>js/lightbox.js"></script>
    <script src="<?= URL ?>js/script.js"></script>
    <script src="<?= URL ?>js/ckeditor.js"></script>
    <script src="<?= URL ?>js/ckeditor.js.map"></script>

    <script>
     ClassicEditor
    .create( document.querySelector( '#editor' ), {
        toolbar: {
          items: [
              'heading', '|',
              'fontfamily', 'fontsize', '|',
              'alignment', '|',
              'fontColor', 'fontBackgroundColor', '|',
              'bold', 'italic', 'strikethrough', 'underline', 'subscript', 'superscript', '|',
              'link', '|',
              'outdent', 'indent', '|',
              'bulletedList', 'numberedList', 'todoList', '|',
              'code', 'codeBlock', '|',
              'insertTable', '|',
              'uploadImage', 'blockQuote', '|',
              'undo', 'redo'
          ],
          shouldNotGroupWhenFull: true
        },
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.log( error );
    } );
    </script>

  </body>
</html>