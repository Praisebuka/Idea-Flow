<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="fan-solid.svg">
  <title>IdeaFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <x-navbar/>
    <div class="flex flex-col">
    <x-problem-hero :problem="$problem" />
    
</div>

<div>
 <x-problem-description :problem="$problem" :image="$image"/>
</div>
<div>
  <x-problem-reaction :problem="$problem" :unliked="$unliked" :liked="$liked" />
  @php
      
  @endphp
</div>
<div>
  <x-comments :comments="$problem->comments"/>
</div>
<x-problem-comment-form :id="$problem->id"/>
 <div>
  <x-footer/>
 </div>
</body>