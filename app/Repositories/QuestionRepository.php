<?php
namespace App\Repositories;

use App\Models\Header;
use App\Models\Question;

class QuestionRepository{
    public function index()
    {
        return Question::with('header')->get();
    }
    public function create(Header $header,array $questionData)
    {
        $question = $header->question()->create($questionData);
        return $question;
    }
    public function update(Question $question, Header $header,array $questionData)
    {
        $question->update($questionData);
        $question->regional()->associate($header);
        return $question;
    }
    public function delete(Question $question)
    {
        $question->delete();
    }
    public function findById($id)
    {
        return Question::with('header')->findOrFail($id);
    }

    public function getQuestion($week)
    {
        return Question::where('week',$week)->with('header')->get();
    }
}