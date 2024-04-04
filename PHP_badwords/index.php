<?php
$sentence = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto accusamus quis repellendus quidem? Nam quasi ipsum quas amet quos at obcaecati aut reiciendis odio.'
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
</head>
<body>
    <div class="container">
        <h2 class="mt-5 mb-3">Censorator</h2>
        <form action="./server.php" method="post">
            <div class="mb-3">
                <label for="sentence" class="form-label">Sentence</label>
                <textarea class="form-control" name="sentence" id="sentence" cols="30" rows="10"><?= $sentence ?></textarea>
                
                <small id="sentenceHelper" class="form-text text-muted">Add a paragraph to censor</small>
            </div>

            <div class="mb-3">
                <label for="word" class="form-label">Word</label>
                <input
                    type="text"
                    class="form-control"
                    name="word"
                    id="word"
                    aria-describedby="wordHelper"
                    placeholder="type a word"
                />
                <small id="wordHelper" class="form-text text-muted">Add a paragraph to censor</small>
            </div>

            <button
                type="submit"
                class="btn btn-primary"
            >
                Censor
            </button>
            
            
        </form>
    </div>
</body>
</html>