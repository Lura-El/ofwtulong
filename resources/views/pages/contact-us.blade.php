<div id="contact-us" class="tab">
            <div id="contact-us-title"><h1 >Contact Us</h1></div>
            <div id="contact-sub-con">
                <article id="contact-us-text">
                    <section id="text-con">
                        <h1>Please Reach Us!</h1>
                        <p> 
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Soluta odit deleniti sint qui deserunt neque, nam nostrum
                            eveniet rem enim est! Ullam eligendi nobis porro quidem eaque dolorum ad consequuntur!
                        </p>
                    </section>
                    <section>
                        <h1>Location</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Reprehenderit excepturi veniam eum cupiditate non reiciendis ad labore
                            saepe voluptates numquam?
                        </p>
                    </section>
                </article>
                <div id="contact-form">

                    <form action="{{ route('contact.submit') }}" method="POST" >
                        @csrf
                        <label for="name"></label>
                        <input type="text" name="name" placeholder="Name" id="name"> <br>
                        <label for="email"></label>
                        <input type="email" name="email" placeholder="Email" required>
                        <label for="phone"></label>
                        <input type="tel" name="phone" placeholder="Phone" required> <br>
    
                        <label for="message"></label>
                        <textarea name="message" placeholder="Message" id="message-area" required></textarea><br>
                    
                        <button type="submit" id="send-mes-btn">Send Message</button>
                </form>
                </div>
                
        </div>