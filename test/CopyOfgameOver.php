<?php

// 评分
// 变量初始化
$paperId = input("test_paper_id");
$studentid = session('tester')['studentId'];
// 是否已有个人试卷
$whereFindPaper = [
    'studentid' => $studentid,
    'paper_id' => $paperId
];
$answerPaper = db('AnswerPaper')->where($whereFindPaper)->select();
$a = [];
$b = [];
foreach ($answerPaper as $value) {
    $atest = unserialize($value['answer']);
    if ($atest) {
        foreach ($atest as $atestkey => $atestvalue) {
            $a[$atestkey] = $atestvalue;
        }
        $b[] = $value['select_question_id'];
    }
}
// 查询所有答案
$resultStandAnswer = db('select_item')->where('select_question_id', 'in', $b)->select();
foreach ($resultStandAnswer as $value) {
    $standA[$value['select_question_id']][$value['id']] = $value['isanswer'];
}
$countCorrectNumber = 0;
foreach ($standA as $key1 => $standValue) {
    // 批改一题
    $answerCorrect = true;
    foreach ($standValue as $itemid => $value2) {
        if (isset($a[$itemid])) {
            if ($a[$itemid] != $value2) {
                $answerCorrect = false;
                break;
            }
        } else {
            if ($value2 != 0) {
                $answerCorrect = false;
                break;
            }
        }
    }
    if ($answerCorrect) {
        $countCorrectNumber ++;
    }
}
// 记分
// 查询试卷
$paper = Paper::get($paperId);
$scoreRecord = [
    'studentId' => $studentid,
    'test_name' => $paper['name'],
    'subject' => $paper['subject'],
    'paper_id' => $paperId,
    'mark' => $countCorrectNumber
];
$score = new Score();
$scoreFind = [
    'studentId' => $studentid,
    'paper_id' => $paperId
];

$fandScore = $score->where($scoreFind)->value('id');
if ($fandScore) {
    $score->save($scoreRecord, $scoreFind);
} else {
    $score->save($scoreRecord);
}
$this->redirect('index');
?>