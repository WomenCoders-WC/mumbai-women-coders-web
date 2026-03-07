export interface FAQ {
    question: string;
    answerText: string;
    link?: {
        text: string;
        url: string;
    };
}

export const faqs: FAQ[] = [
    {
        question: "Who can join Women Coders",
        answerText: "We are a dedicated community focused on empowering and supporting women in the technology sector. We welcome everyone who are passionate about coding, leadership, and professional growth in the tech ecosystem."
    },
    {
        question: "Is there a membership fee?",
        answerText: "No, joining Women Coders is completely free! Our core technical meetups, study groups, and community platforms are accessible to everyone without any charge."
    },
    {
        question: "How can I become a speaker at a Women Coders event?",
        answerText: "We're always looking for fresh perspectives! You can apply to speak by filling out our \"Call for Speakers\" form available on our events page, or by reaching out to our chapter leads during any of our monthly meetups."
    },
    {
        question: "What kind of technical topics do you cover?",
        answerText: "We cover a wide spectrum including Full-Stack Web Development, Data Science, AI/ML, Cloud Infrastructure (AWS/Azure), Cybersecurity, and even soft skills like Technical Leadership and Salary Negotiation."
    },
    {
        question: "How can I become a volunteer at Women Coders",
        answerText: "Connect with us on our social media channels, join our WhatsApp community, and explore opportunities shared in our channels. Complete the Volunteer Form, and our team will get in touch with the next steps. ",
        link: {
            text: "Join Today",
            url: "https://forms.gle/LQjaPqYjzjGJ9FYT9"
        }
    }
];
