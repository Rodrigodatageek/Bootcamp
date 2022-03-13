export class Message {
  constructor(side, name, text) {
    this.side = side;
    this.name = name;
    this.text = text;

    this.messageElement = document.createElement("div");
    this.messageElement.className = `message message--${side}`;

    const textElement = document.createElement("div");
    textElement.className = "message__text";
    textElement.innerText = text;

    this.messageElement.appendChild(textElement);
  }
}

// class RemoteMessage extends message {
//   Remote() {

      
//   }


// class LocalMessage extends message {
//   Local() {
      
  }


// Exercise
// In the OOP implementation of the robot chat exercise, declare two separate classes for two kinds of messages:

// RemoteMessage
// LocalMessage
// Also declare a common class Message that will contain all the common functionality.

// Have the two new classes extend the common one.

// When adding messages to the Conversation, use a condition (or a switch statement) to decide whether to create a RemoteMessage object or a LocalMessage object.
