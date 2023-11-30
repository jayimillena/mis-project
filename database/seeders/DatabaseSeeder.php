<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Resource;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $resources = [
            [
                'slug' => Str::random(11),
                'title' => "History and Generation of Computers - Tagalog",
                'description' => 'The origins of computers trace back to the early 17th century with Blaise Pascal\'s creation of the Pascaline, a mechanical calculator capable of performing basic arithmetic operations. In the early 19th century, Charles Babbage conceptualized the Analytical Engine, recognized as the inaugural general-purpose computer. Nonetheless, it wasn\'t until the mid-20th century that electronic computers came into existence.',
                'author' => 'IT Tutorial PH',
                'url' => 'HLtzXAu5jWY',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "Types of Computers | Super | Mainframe | Mini | Micro computers | Uses",
                'description' => 'In this video, the focus is on elucidating the applications of large computers, specifically supercomputers, in scientific and research contexts. It also delves into the uses of mainframe computers within large organizations for critical applications. Additionally, the video explores mini computers, mid-range computers, and mid-range servers, highlighting their diverse applications. The discussion extends to micro-computers, encompassing smaller devices like desktops, laptops, smart TVs, and smartphones, with real-time examples illustrating their practical applications.',
                'author' => 'CSPictorial',
                'url' => 'fscCXPXd7YA',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "Computer Basics: Basic Parts of a Computer",
                'description' => 'In this video, the utilization of supercomputers in scientific and research applications is elucidated. Additionally, the role of mainframe computers in critical applications within large organizations is discussed. The video also delves into mid-range computers or servers, commonly referred to as mini computers, and their applications. Furthermore, it explores micro-computers, which encompass smaller devices such as desktops, laptops, smart TVs, and smartphones, highlighting their applications through real-time examples.',
                'author' => 'GCFLearnFree',
                'url' => 'mLgTnkw558w',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "Parts of a System Unit and its Functions Simplified (Tagalog) Computer Ideas with Kuya Carls",
                'description' => 'Computer hardware refers to the physical components of a computer system that you can touch and manipulate. It encompasses everything from the central processing unit (CPU) and memory to storage devices, input/output devices, and peripheral components. The CPU is the brain of the computer, responsible for executing instructions, while memory provides temporary storage for data in use. Storage devices like hard drives or SSDs store data permanently. Input devices, such as keyboards and mice, allow user interaction, while output devices like monitors and printers display information. Peripheral components include connectors, cables, and other accessories that facilitate communication between the computer and external devices. Together, these hardware elements form the foundation of a computer system, enabling it to perform various tasks and functions.',
                'author' => 'Labarda - Gutierrez Family Vlog /Computer Ideas',
                'url' => '_Ew68nD1siE',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "Ano ang Pinagkaiba ng Hardware at Software | Hardware Software Halimbawa | Computer Tutorial Tagalog",
                'description' => 'This video explains the large computers – supercomputers – its uses in scientific and research applications. This video also explains about the mainframe computers – its uses in large organizations for critical applications. The mini computers (or) mid-range computers (or) mid-range servers. Micro-computers – smaller computers for personal use – desktop- laptop- smart tv- smart phones. Applications of these computers with real-time examples.',
                'author' => 'Araling Pilipino',
                'url' => '4T-eJnZlIu4',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "What is a Smartphone? - A Basic Understanding",
                'description' => 'How can a phone be defined as smart? There are many definition of what constitutes as a smartphone. According to Merriam-Webster, a smartphone is broadly define as “Cell phone that includes additional software functions such as e-mail or internet browser”. However, based on wiki, the definition is much specific. Smartphone is defined as “mobile phone with an advanced mobile operating system which combines features of a personal computer operating system with other features useful for mobile or handheld use”.',
                'author' => 'My Smart Gadget',
                'url' => 'EUyIgMG1zfo',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "Windows Basics: Working with Files and Folders",
                'description' => 'How can a phone be defined as smart? There are many definition of what constitutes as a smartphone. According to Merriam-Webster, a smartphone is broadly define as “Cell phone that includes additional software functions such as e-mail or internet browser”. However, based on wiki, the definition is much specific. Smartphone is defined as “mobile phone with an advanced mobile operating system which combines features of a personal computer operating system with other features useful for mobile or handheld use”.',
                'author' => 'GCFLearnFree',
                'url' => 'BY1y_RQxIdg',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "Lesson 1: Introduction to Media and Information Literacy | Media and Information Literacy",
                'description' => 'What is Media and Information Literacy? How is it connected and relevant to effective communication? Why is it an essential 21st century skill?',
                'author' => 'Teacher Kat',
                'url' => 'h5Eb5rtfa0w',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "Cloud Computing In 6 Minutes | What Is Cloud Computing? | Cloud Computing Explained | Simplilearn",
                'description' => "Cloud computing is a popular practice involving the internet to store and manage your data on the internet. In this video on cloud computing, we'll take you through all of the basic concepts of cloud computing like what makes it unique, its different models, and more. So without further ado, let's jump right into cloud computing.",
                'author' => 'Simplilearn',
                'url' => 'M988_fsOSWo',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "Computer Basics: Understanding Operating Systems",
                'description' => "Whether you have a laptop, desktop, smartphone, or tablet, your device has an operating system (also known as an 'OS'). In this video we'll show you what an operating system is and talk about a few of the most common operating systems.",
                'author' => 'GCFLearnFree',
                'url' => 'fkGCLIQx1MI',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "32 Secret Combinations on Your Keyboard",
                'description' => "Have you ever thought about how many secrets are hidden inside of your computer? Only 20 years ago, the most advanced computers had hard drive capacity of 320 Megabytes, and it was considered as a great breakthrough in personal computers’ technology at that time.",
                'author' => 'BRIGHT SIDE',
                'url' => 'WGuFofNF1Pk',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "Graphical User Interfaces: Crash Course Computer Science #26",
                'description' => "Today, we're going to discuss the critical role graphical user interfaces, or GUIs played in the adoption of computers. Before the mid 1980's the most common way people could interact with their devices was through command line interfaces, which though efficient, aren't really designed for casual users. This all changed with the introduction of the Macintosh by Apple in 1984. It was the first mainstream computer to use a GUI, standing on the shoulder of nearly two decades of innovation including work from the father of the GUI himself, Douglas Englebart, and some amazing breakthroughs at Xerox Parc.",
                'author' => 'CrashCourse',
                'url' => 'XIGSJshYb90',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "What is a browser?",
                'description' => "Basic explanation of the web browser. Learn more at http://whatbrowser.org",
                'author' => 'Google',
                'url' => 'BrXPcaRlBqo',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "History of the Internet",
                'description' => "The internet is one of the most important tools in recent history, giving us access to countless amounts of information. This show wouldn't exist without the internet and to show our respects to this wonderful invention we give you a brief history of how it all came to be.",
                'author' => 'Life Noggin',
                'url' => 'h8K49dD52WA',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "First 60 Minutes if the Internet Goes Down EVERYWHERE (Minute by Minute)",
                'description' => "If for some reason the internet did go down across the globe, it would only take a matter of minutes for the entire world to be thrown into complete panic! Find out what the first 60 minutes of no internet across the globe would actually look like! The apocalypse would happen much faster than you think!",
                'author' => 'The Infographics Show',
                'url' => '26MgTCz7GhA',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "Every Microsoft 365 App: Explained!",
                'description' => "Microsoft 365 offer a suite of productivity tools. They includes Excel, Word, Powerpoint, Planner, Teams and much more. This is every Microsoft 365 application you need to know.",
                'author' => 'Keep Productive',
                'url' => '2W0T2qGZ9Dc',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "Beginner's Guide to Microsoft Word",
                'description' => "If you like this video, here's my entire playlist of Word tutorials: http://bit.ly/2FY6NVT. Learn the basics of effectively using Microsoft Word, including how to format images so that they can be moved freely around your document and positioned where you want them to be.",
                'author' => 'Technology for Teachers and Students',
                'url' => 'S-nHYzK-BVg',
                'updated_at' => now(),
                'created_at' => now(),
            ],
            [
                'slug' => Str::random(11),
                'title' => "Excel Tutorial for Beginners",
                'description' => "Are you looking to upskill your Excel game? Look no farther than this step-by-step tutorial! Learn the essentials of how to use Microsoft Excel, starting with the absolute basics like entering data and formatting. From there, we cover conditional formatting, sorting, filtering, and advance to charts and pivot tables. By the end of this video, you'll have a strong understanding of the fundamentals of Excel.",
                'author' => 'Kevin Stratvert',
                'url' => 'LgXzzu68j7M',
                'updated_at' => now(),
                'created_at' => now(),
            ],  
            [
                'slug' => Str::random(11),
                'title' => "PowerPoint Tutorial for Beginners",
                'description' => "In this step-by-step tutorial, learn how to use Microsoft PowerPoint. Microsoft PowerPoint is a powerful and versatile tool that allows you to create stunning presentations for any purpose. Whether you want to impress your boss, teach your students, or share your ideas with the world, PowerPoint can help you achieve your goals.",
                'author' => 'Kevin Stratvert',
                'url' => 'l5Ij7nUy9UQ',
                'updated_at' => now(),
                'created_at' => now(),
            ],
        ];
        
        Resource::insert($resources);
    }
}
