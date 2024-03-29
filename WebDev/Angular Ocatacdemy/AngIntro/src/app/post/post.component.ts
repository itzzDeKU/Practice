import { Component,OnInit,Input,Output,EventEmitter } from '@angular/core';

@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.css']
})

export class PostComponent implements OnInit {
 title: String = "List of Posts" ;
 messagePost: string ='Message Post';

 postParentMessage: string = 'Message coming from the post parent';

 childMessage: string = 'From Child Component';
 outputChildMessage: string = 'Message from Child Componet via Output';

 @Input()fromParent:  string;
 @Output() messageEvent = new EventEmitter <string> ();


 constructor() { }
 ngOnInit() : void{
 }

 sendMessage(){
    //emit message -> outputChildMessage
   this.messageEvent.emit(this.outputChildMessage);
 }
}
