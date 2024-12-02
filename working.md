# Data Binding
1. Real-Time Sync Between Front-End and Back-End

Livewire supports 2 types of data binding 
1. One way data binding ->this type of data binding involves the full of single direction(component to view only) 
2. two way data binding -> This type of data binding involves both direction .. (component to view and view to the component)

 Livewire makes it easy to bind a component property's value with form inputs using wire:model.

        In order to bind any data from the form input we will have to use this wire:model()
1. Oneway data binding

   <input type="text" wire:model="message">

   public $message = 'Welcome to Programming Fields';
 the data is passing from the component class to component view ..    

2. Two way data binding

    <h1>{{$message}}</h1>
    <input type="text" wire:model="message">
    <button wire:click="updateMessage">Submit</button>

        public function updateMessage(){

   }
when i give something in input field .. and press the submit it , that message also changing .. that is two way binding.. 
    when you inspect this during clicking submit , you can see the ajax doing things in network -> update.. it doesnt reload the page .. when i trigger submit button its reload the the component and sync it .. 

wire:model.live

<input type="text" wire:model.live="message">
        this will send property updates automatically when we will type anything inside this input type.. 

<input type="text" wire:model.live.debounce="message">
            when i stop typing this triggered the ajax call .. (Namma type panitu irukum pothu live la kaatathu.. Hand ah keyboard la irunthu yedutthathum than namma type pannathu varum.. )

<input type="text" wire:model.live.debounce.500ms="message">
          We can delay that too.. Namma type panni 500 ms aprom.. type pannathu show aganum nu nenacha itha use pannanum.. 

Next blur Event..
<input type="text" wire:model.blur"message">
    ithu enna pannum naa.. input field la type panratha live ah ajax req ah execute pannama, namma epo outside la press or click panramo apo execute pannum.. 

# Form Handling..

