import type { Metadata } from "next";
import CodeOfConductClient from "@/components/CodeOfConductClient";

export const metadata: Metadata = {
    title: "Code of Conduct | Mumbai Women Coders",
    description: "Our commitment to providing a friendly, safe and welcoming environment for everyone.",
};

export default function CodeOfConductPage() {
    return <CodeOfConductClient />;
}
