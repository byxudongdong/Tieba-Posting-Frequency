<?php
class Timer{
private $startTime = 0; //����ű���ʼִ��ʱ��ʱ�䣨��΢�����ʽ���棩
private $stopTime = 0; //����ű�����ִ��ʱ��ʱ�䣨��΢�����ʽ���棩
 
//�ڽű���ʼ�����û�ȡ�ű���ʼʱ���΢��ֵ
function start(){
$this->startTime = microtime(true); //����ȡ��ʱ�丳ֵ����Ա����$startTime
}
//�ű����������ýű�������ʱ��΢��ֵ
function stop(){
$this->stopTime = microtime(true); //����ȡ��ʱ�丳����Ա����$stopTime
}
//����ͬһ�ű������λ�ȡʱ��Ĳ�ֵ
function spent(){
//�����4��5�뱣��4λ����
return round(($this->stopTime-$this->startTime),4);
}
}
?>