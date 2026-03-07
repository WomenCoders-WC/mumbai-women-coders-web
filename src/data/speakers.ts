export interface Speaker {
    name: string;
    role: string;
    img: string;
    link: string;
}

export const speakers: Speaker[] = [
    {
        name: 'Ramyashree Shetty',
        role: 'Data Engineer @ Radix',
        img: '/assets/images/speakers/ramyashree-shetty.webp',
        link: 'https://www.linkedin.com/in/ramyashree-shetty/'
    },
    {
        name: 'Taazeen Ansari',
        role: 'Computer Engineering Student @ SIES',
        img: '/assets/images/speakers/taazeen-ansari.webp',
        link: 'https://www.linkedin.com/in/taazeenansari/'
    },
    {
        name: 'Nikita Goswami',
        role: 'AI/ML Research Intern @ Monash University',
        img: '/assets/images/speakers/nikita-goswami.webp',
        link: 'https://www.linkedin.com/in/nikitagoswami3/'
    }
];
