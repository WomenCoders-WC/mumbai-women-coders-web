export interface SuccessStory {
    name: string;
    role: string;
    image: string;
    imageAlt: string;
    quote: string;
    delayClass?: string;
}

export const successStories: SuccessStory[] = [
    {
        name: "Ramyashree Shetty",
        role: "Data Engineer @ Radix",
        image: "/assets/images/speakers/ramyashree-shetty.webp",
        imageAlt: "Ramyashree Shetty",
        quote: "\"Speaking at Mumbai Women Coders was such a fun and energizing experience. It’s a community built by women, for everyone who is open, curious, and full of great questions. I loved sharing “Selective AI is a Skill” and the lively conversations that followed. Truly a space where ideas flow freely and everyone feels welcome.\""
    },
    {
        name: "Taazeen Ansari",
        role: "Student @ SIES",
        image: "/assets/images/speakers/taazeen-ansari.webp",
        imageAlt: "Taazeen Ansari",
        quote: "\"For me, speaking at the first Mumbai Women Coders meetup of 2026 wasn’t just about delivering a session - it was about being part of something bigger. The energy in the room, the conversations we shared, and the questions we explored together made it feel personal and meaningful. What I loved most was how we weren’t just listening - we were thinking, reflecting, and growing as a community. It felt like a space where all of us could openly question, learn, and support each other.\"",
        delayClass: "delay-2"
    }
];
