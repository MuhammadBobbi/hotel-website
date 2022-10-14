<template>
    <div>
        <vs-row>
            <vs-col vs-lg="12">
                <vs-card>
                    <h1>About</h1>
                </vs-card>
                <vs-card>
                    <div class="row">
                        <div class="column">
                            <div class="card">
                            <h3>About</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ullam quam est? Voluptates recusandae at nisi aperiam harum dolorem praesentium voluptas natus in eaque deserunt unde obcaecati ea, eos voluptatibus.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quidem officia expedita obcaecati eveniet magnam quibusdam impedit molestias aliquid sint hic, recusandae eius quis voluptates magni laboriosam deleniti exercitationem repellendus rerum corporis, iste dignissimos commodi corrupti. Eaque voluptas impedit eum facilis iure! Vero odio neque eaque repudiandae ipsam adipisci, quos libero velit reiciendis. Animi nam itaque laborum quia. Optio aspernatur neque ad dolore suscipit laboriosam numquam quaerat enim modi harum tempora corporis iusto ex assumenda asperiores iure, laudantium praesentium inventore sapiente, veniam distinctio odio. Nihil doloremque saepe soluta sapiente delectus natus reprehenderit excepturi nam veritatis necessitatibus est laudantium suscipit et quas minus porro obcaecati assumenda corporis laborum dolorem quasi dolorum, quaerat expedita. Beatae reprehenderit atque corrupti soluta voluptates in sequi voluptate omnis nobis perferendis quibusdam, perspiciatis explicabo dolorum est odio alias architecto quisquam doloribus minima laudantium maiores nihil facilis consectetur! Quod modi adipisci sapiente veritatis explicabo necessitatibus optio aut! Architecto quia deserunt culpa corporis, dolores in illum suscipit repellat adipisci velit animi incidunt asperiores iste excepturi autem deleniti minima atque numquam perferendis neque? Minima ea atque molestias consectetur, asperiores veniam tempora distinctio expedita iusto assumenda nihil minus debitis molestiae temporibus esse quos vel, consequuntur laudantium eius blanditiis vitae dicta dolor!</p>
                            </div>
                        </div>

                        <div class="column">
                            <div class="card">
                            <h3>Card 2</h3>
                            <p>Some text</p>
                            <p>Some text</p>
                            </div>
                        </div>
  
  
                    </div>

                </vs-card>
                
                <div v-bind:id="dynamicId"></div>
            </vs-col>
        </vs-row>
    </div>
</template>

<script>
export default{
    mounted(){
        this.$openloader();
        setTimeout(()=>{
            $this.closeloader();
        }, 3000);
    }
}
</script>

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  background-color: #f1f1f1;
}
</style>